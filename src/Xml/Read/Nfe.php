<?php

namespace Xml\Read;

use Xml\Util\Models\TotalNfe;
use Xml\Util\Util;
use Xml\Util\Models\Entidade;
use Xml\Util\Models\CabecalhoNfe;
use Xml\Util\Models\Servicos;
use Xml\Util\Models\Transportadora;
use Xml\Util\Models\CobrancaNfe;


class Nfe {


    private object $xml_objct;
    private object $xml_objct_raiz;

    function __construct( string $xml_file){

        if( !$xml_file ){
            throw new \Exception('File Path Required!');
        }
     
        $util = new Util();

        $util->ValidateFile($xml_file, 'xml');

        $this->xml_objct = simplexml_load_string($util->getContent());
        
        $util->validateIsCteOrNfe($this->xml_objct, 'nfe');

        $this->xml_objct_raiz = $this->xml_objct;

        $this->xml_objct = $this->xml_objct->nfe;

    }

    public function all(): object
    {

        $cabecalho = $this->getCabecalho();
        $cabecalho->emitente = $this->getEmitente();
        $cabecalho->destinatario = $this->getDestinatario();

        $cabecalho->transportadora = $this->getTranspotadora();
        $cabecalho->total = $this->getTotal();
        $cabecalho->cobranca = $this->getCobranca();



        $cabecalho->chave = $this->getChave();

        return $cabecalho;
    }

    public function getCabecalho(): object|bool
    {   
        if(isset($this->xml_objct->infnfe->ide)){
            $dados = new CabecalhoNfe($this->xml_objct->infnfe->ide);
            return $dados->toObject();
        }

        return false;

    }

    public function getEmitente(): object|bool
    {
      
        if(isset($this->xml_objct->infnfe->emit)){
            $entidade = new Entidade($this->xml_objct->infnfe->emit, 'emit');
            return $entidade->toObject();
        }

        return false;
    }

    public function getRemetente(): object|bool
    {

        if(isset($this->xml_objct->infnfe->rem)){
            $entidade = new Entidade($this->xml_objct->infnfe->rem, 'rem');
            return $entidade->toObject();
        }

        return false;
    }

    public function getDestinatario(): object|bool
    {

        if(isset($this->xml_objct->infnfe->dest)){
            $entidade = new Entidade($this->xml_objct->infnfe->dest, 'dest');
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getExpedidor(): object|bool
    {
      
        if(isset($this->xml_objct->infnfe->exped)){
            $entidade = new Entidade($this->xml_objct->infnfe->exped, 'exped');
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getRecebedor(): object|bool
    {
      
        if(isset($this->xml_objct->infnfe->receb)){
            $entidade = new Entidade($this->xml_objct->infnfe->receb, 'receb');
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getServicos(): object|bool
    {
      
        if(isset($this->xml_objct->infnfe->vprest)){
            $entidade = new Servicos($this->xml_objct->infnfe->vprest);
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getTranspotadora(): object|bool
    {
      
        if(isset($this->xml_objct->infnfe->transp)){
            $entidade = new Transportadora($this->xml_objct->infnfe->transp);
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getTotal(): object|bool
    {
      
        if(isset($this->xml_objct->infnfe->total)){
            $entidade = new TotalNfe($this->xml_objct->infnfe->total);
            return $entidade->toObject();
        }

        return false;
 
    }

    public function getCobranca(): object|bool
    {
      
        if(isset($this->xml_objct->infnfe->cobr)){
            $entidade = new CobrancaNfe($this->xml_objct->infnfe->cobr);
            return $entidade->toObject();
        }

        return false;

    }

    public function getChave(): string
    {   

        if(isset($this->xml_objct_raiz->protnfe->infprot->chnfe)){
            return trim( ( string ) $this->xml_objct_raiz->protnfe->infprot->chnfe );
        }

        return "";
      
    }
}
