<?php

namespace Xml\Read;

use Xml\Util\Models\Nfe\Cobranca\Cobranca;
use Xml\Util\Models\Nfe\Totais\Totais;
use Xml\Util\Util;
use Xml\Util\Models\Nfe\Entidade;
use Xml\Util\Models\Nfe\IdentificacaoNFE;
use Xml\Util\Models\Nfe\Servicos\Servicos;
use Xml\Util\Models\Nfe\Transporte\Transporte;
use Xml\Util\Models\Nfe\InformacoesAdicionais\InformacoesAdicionais;
use Xml\Util\Models\Nfe\InformacoesResponsavelTecnico\InformacoesResponsavelTecnico;


class Nfe {


    private object $xml_objct;
    private object $xml_objct_raiz;
    private string $type_file;
    public string | null $chave;
    public object | null $identificacao_nfe;
    public object | null $emitente;
    public object | null $destinatario;
    public object | null $expedidor;
    public object | null $servicos;
    public object | null $totais;
    public object | null $cobranca;
    public object | null $transporte;
    public object | null $informacoes_adicionais;
    public object | null $informacoes_responsavel_tecnico;

    function __construct( string $xml_file){

        if( !$xml_file ){
            throw new \Exception('File Path Required!');
        }
     
        $util = new Util();

        $util->ValidateFile($xml_file, 'xml');

        try{
            $this->xml_objct = simplexml_load_string($util->getContent());

        }catch(\Exception $e){
            throw new \Exception('Erro ao ler o arquivo xml! Não é do tipo NFE');
        }
        
        $this->xml_objct_raiz = $this->xml_objct;

        try{
            $util->validateIsCteOrNfe($this->xml_objct, 'nfe');
            $this->xml_objct = $this->xml_objct->nfe;
            $this->type_file = 'infnfe';

        }catch(\Exception $e){
            try{
                $util->validateIsCteOrNfe($this->xml_objct, 'infcfe');
                $this->type_file = 'infcfe';

            }catch(\Exception $e){
                $util->validateIsCteOrNfe($this->xml_objct, '');
                $this->type_file = 'infnfe';
            }

        }

        


    }

    public function all(): object
    {   
        $resultado = new \stdClass();

        $this->chave = $this->getChave();
        $this->identificacao_nfe = $this->getIdentificacaoNFE();
        $this->informacoes_adicionais = $this->getInformacoesAdicionais();
        $this->emitente = $this->getEmitente();
        $this->destinatario = $this->getDestinatario();
        $this->expedidor = $this->getExpedidor();
        $this->servicos = $this->getServicos();
        $this->totais = $this->getTotal();
        $this->cobranca = $this->getCobranca();
        $this->transporte = $this->getTransporte();
        $this->informacoes_responsavel_tecnico = $this->getInformacoesResponsavelTecnico();

        $resultado->chave = $this->chave;
        $resultado->identificacao_nfe = $this->identificacao_nfe;
        $resultado->informacoes_adicionais = $this->informacoes_adicionais;
        $resultado->emitente = $this->emitente;
        $resultado->destinatario = $this->destinatario;
        $resultado->servicos = $this->servicos;
        $resultado->expedidor = $this->expedidor;
        $resultado->totais = $this->totais;
        $resultado->cobranca = $this->cobranca;
        $resultado->transporte = $this->transporte;
        $resultado->informacoes_responsavel_tecnico = $this->informacoes_responsavel_tecnico;

        return $resultado;
    }

    public function getIdentificacaoNFE(): object|null
    {   
        $type = $this->type_file;

        if(isset($this->xml_objct->$type->ide)){
            $dados = new IdentificacaoNFE($this->xml_objct->$type->ide);
            return $dados->toObject();
        }

        return null;

    }

    public function getInformacoesAdicionais(): object|null
    {   
        $type = $this->type_file;

        if(isset($this->xml_objct->$type->infadic)){
            $dados = new InformacoesAdicionais($this->xml_objct->$type->infadic);
            return $dados->toObject();
        }

        return null;

    }

    public function getEmitente(): object|null
    {
        $type = $this->type_file;

        if(isset($this->xml_objct->$type->emit)){
            $entidade = new Entidade($this->xml_objct->$type->emit, 'emit');
            return $entidade->toObject();
        }

        return null;
    }

    public function getRemetente(): object|null
    {
        $type = $this->type_file;

        if(isset($this->xml_objct->$type->rem)){
            $entidade = new Entidade($this->xml_objct->$type->rem, 'rem');
            return $entidade->toObject();
        }

        return null;
    }

    public function getDestinatario(): object|null
    {
        $type = $this->type_file;

        if(isset($this->xml_objct->$type->dest)){
            $entidade = new Entidade($this->xml_objct->$type->dest, 'dest');
            return $entidade->toObject();
        }

        return null;
 
    }

    public function getExpedidor(): object|null
    {
        $type = $this->type_file;
      
        if(isset($this->xml_objct->$type->exped)){
            $entidade = new Entidade($this->xml_objct->$type->exped, 'exped');
            return $entidade->toObject();
        }

        return null;
 
    }

    public function getRecebedor(): object|null
    {
        $type = $this->type_file;
      
        if(isset($this->xml_objct->$type->receb)){
            $entidade = new Entidade($this->xml_objct->$type->receb, 'receb');
            return $entidade->toObject();
        }

        return null;
 
    }

    public function getServicos(): object|null
    {
        $type = $this->type_file;
      
        if(isset($this->xml_objct->$type->det)){
            $entidade = new Servicos($this->xml_objct->$type->det);
            return $entidade->toObject();
        }

        return null;
 
    }

    public function getTransporte(): object|null
    {
        $type = $this->type_file;
      
        if(isset($this->xml_objct->$type->transp)){
            $transporte = new Transporte($this->xml_objct->$type->transp);
            return $transporte->toObject();
        }

        return null;
 
    }

    public function getTotal(): object|null
    {
        $type = $this->type_file;
      
        if(isset($this->xml_objct->$type->total)){
            $total = new Totais($this->xml_objct->$type->total);
            return $total->toObject();
        }

        return null;
 
    }

    public function getCobranca(): object|null
    {
        $type = $this->type_file;
      
        if(isset($this->xml_objct->$type->cobr)){
            $entidade = new Cobranca($this->xml_objct->$type->cobr);
            return $entidade->toObject();
        }

        return null;

    }

    public function getInformacoesResponsavelTecnico(): object|null
    {
        $type = $this->type_file;
      
        if(isset($this->xml_objct->$type->infresptec)){
            $info = new InformacoesResponsavelTecnico($this->xml_objct->$type->infresptec);
            return $info->toObject();
        }

        return null;

    }
    public function getChave(): string
    {   
        if (isset($this->xml_objct_raiz->infcfe)) {
            $att = 'id';
            $idcfe = (string)$this->xml_objct_raiz->infcfe->attributes()->$att;
            if($idcfe){
                return $idcfe;
            }
        }

        if (isset($this->xml_objct_raiz->protnfe->infprot->chnfe)) {
            return trim((string)$this->xml_objct_raiz->protnfe->infprot->chnfe);
        }

        throw new \Exception("Campo chave não encontrado");
      
    }
}
