<?php
declare(strict_types=1);

namespace Xml\Util\Models;


class Endereco {

    private object $xml;
    public string $logradouro;
    public string $numero;
    public string $bairro;
    public string $codigo_municipio;
    public string $nome_municipio;
    public string $cep;
    public string $uf;
    public string $fone;


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([

            'logradouro'        => 'xlgr',
            'numero'            => 'nro',
            'bairro'            => 'xbairro',
            'codigo_municipio'  => 'cmun',
            'nome_municipio'    => 'xmun',
            'cep'               => 'cep', 
            'uf'                => 'uf', 
            'fone'              => 'fone', 

        ]);

    }


    private function getAtribute(array $atributes) :void
    {

        foreach($atributes as $atribute => $tag){
            if( isset($this->xml->$tag) ){
                $this->$atribute = trim( (string) $this->xml->$tag );
            }else{
                $this->$atribute = "";
            }
        }

    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
        $return->logradouro = $this->logradouro;
        $return->numero = $this->numero;
        $return->bairro = $this->bairro;
        $return->codigo_municipio = $this->codigo_municipio;
        $return->nome_municipio = $this->nome_municipio;
        $return->cep = $this->cep;
        $return->uf = $this->uf;
        $return->fone = $this->fone;

        return $return;
    }

}
