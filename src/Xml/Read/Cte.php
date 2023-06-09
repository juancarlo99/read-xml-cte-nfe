<?php

namespace Xml\Read;

use Xml\Util\Util;
use Xml\Util\Models\Entidade;
use Xml\Util\Models\CabecalhoCte;
use Xml\Util\Models\Servicos;
use Xml\Util\Models\Imposto;


class Cte {

    const TOMADOR_REMETENTE = 0;
    const TOMADOR_EXPEDIDOR = 1;
    const TOMADOR_RECEBEDOR = 2;
    const TOMADOR_DESTINATARIO = 3;
    const TOMADOR_OUTROS = 4;


    private object $xml_objct;
    private object $xml_objct_raiz;


    function __construct( string $xml_file){

        if( !$xml_file ){
            throw new \Exception('File Path Required!');
        }
     
        $util = new Util();

        $util->ValidateFile($xml_file, 'xml');

        $this->xml_objct = simplexml_load_string($util->getContent());

        $util->validateIsCteOrNfe($this->xml_objct, 'cte');

        $this->xml_objct_raiz = $this->xml_objct;

        $this->xml_objct = $this->xml_objct->cte;

    }

    public function all(): object
    {

        $cabecalho = $this->getCabecalho();
        $cabecalho->emitente = $this->getEmitente();
        $cabecalho->remetente = $this->getRemetente();
        $cabecalho->destinatario = $this->getDestinatario();
        $cabecalho->expedidor = $this->getExpedidor();
        $cabecalho->recebedor = $this->getRecebedor();

        $cabecalho->servico = $this->getServicos();
        $cabecalho->Imposto = $this->getImposto();

        $cabecalho->chave = $this->getChave();

        $this->filterTomador($cabecalho);

        return $cabecalho;
    }

    private function filterTomador(object $cabecalho): void
    {

        $condicoes = [
            self::TOMADOR_REMETENTE => $cabecalho->remetente,
            self::TOMADOR_EXPEDIDOR => $cabecalho->expedidor,
            self::TOMADOR_RECEBEDOR => $cabecalho->recebedor,
            self::TOMADOR_DESTINATARIO => $cabecalho->destinatario,
            self::TOMADOR_OUTROS => []
        ];
        
        $cabecalho->dados_tomador  = $condicoes[$cabecalho->tomador];

    }

    public function getCabecalho(): object|bool
    {

        if(isset($this->xml_objct->infcte->id)){
            $dados = new CabecalhoCte($this->xml_objct->infcte->ide);
            return $dados->toObject();
        }

        return false;

    }

    public function getEmitente(): object|bool
    {
      
        if(isset($this->xml_objct->infcte->emit)){
            $entidade = new Entidade($this->xml_objct->infcte->emit, 'emit');
            return $entidade->toObject();
        }

        return false;

    }

    public function getRemetente(): object|bool
    {
      
        if(isset($this->xml_objct->infcte->rem)){
            $entidade = new Entidade($this->xml_objct->infcte->rem, 'reme');
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getDestinatario():object|bool
    {
      
        if(isset($this->xml_objct->infcte->dest)){
            $entidade = new Entidade($this->xml_objct->infcte->dest, 'dest');
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getExpedidor():object|bool
    {
      
        if(isset($this->xml_objct->infcte->exped)){
            $entidade = new Entidade($this->xml_objct->infcte->exped, 'exped');
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getRecebedor():object|bool
    {
      
        if(isset($this->xml_objct->infcte->receb)){
            $entidade = new Entidade($this->xml_objct->infcte->receb, 'receb');
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getServicos(): object|bool
    {
        
        if(isset($this->xml_objct->infcte->receb)){
            $entidade = new Servicos($this->xml_objct->infcte->vprest);
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getImposto(): object|bool
    {

        if(isset($this->xml_objct->infcte->imp)){
            $entidade = new Imposto($this->xml_objct->infcte->imp);
            return $entidade->toObject();
        }

        return false;

    }

    public function getChave(): string
    {   

        if(isset($this->xml_objct_raiz->protcte->infprot->chc)){
            return trim( ( string ) $this->xml_objct_raiz->protcte->infprot->chcte );
        }
        return "";

    }
}
