<?php
declare(strict_types=1);

namespace Xml\Util\Models;


class Transportadora {

    const MOD_POR_CONTA_EMITENTE = 0;
    const MOD_POR_CONTA_DESTINATARIO = 1;
    const MOD_POR_CONTA_TERCEIROS = 2;
    const MOD_SEM_FRETE = 9;



    private object $xml;
    public int $modo_de_frete;
    public object $volumes;
    public object $dados_tranportadora;


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([

            'modo_de_frete'  => 'modfrete',

        ]);


    }


    private function getAtribute(array $atributes) :void
    {

        foreach($atributes as $atribute => $tag){
            if( isset($this->xml->$tag) ){
                $this->$atribute = (int) trim( (string) $this->xml->$tag );
            }else{
                $this->$atribute = 9;
            }
        }

        $this->geDadosTransportadora();
        $this->geVolumes();
    }

    private function geDadosTransportadora() :void
    {
        $this->dados_tranportadora = new \stdClass();

        if( $this->modo_de_frete != self::MOD_SEM_FRETE ){

            $this->dados_tranportadora->cnpj = trim( (string)  $this->xml->transporta->cnpj );
            $this->dados_tranportadora->nome = trim( (string)  $this->xml->transporta->xnome );
            $this->dados_tranportadora->endereco = trim( (string)  $this->xml->transporta->xender );
            $this->dados_tranportadora->municipio = trim( (string)  $this->xml->transporta->xmun );
            $this->dados_tranportadora->uf = trim( (string)  $this->xml->transporta->uf );
            $this->dados_tranportadora->inscricao_estadual = trim( (string)  $this->xml->transporta->IE );

        }

    }
    
    private function geVolumes() :void
    {
        $this->volumes = new \stdClass();

        if( $this->modo_de_frete != self::MOD_SEM_FRETE ){

            $this->volumes->quantidade_volumes = trim( (string)  $this->xml->vol->qvol );
            $this->volumes->especificacao_volume = trim( (string)  $this->xml->transporta->esp );
            $this->volumes->marca = trim( (string)  $this->xml->transporta->marca );
            $this->volumes->peso_liquido = trim( (string)  $this->xml->transporta->pesoL );
            $this->volumes->peso_bruto = trim( (string)  $this->xml->transporta->pesoB );

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
        $return->modo_de_frete = $this->modo_de_frete;
        $return->volumes = $this->volumes;
        $return->geDadosTransportadora = $this->dados_tranportadora;

        return $return;
    }

}
