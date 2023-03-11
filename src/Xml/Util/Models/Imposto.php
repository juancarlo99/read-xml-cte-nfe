<?php
declare(strict_types=1);

namespace Xml\Util\Models;


class Imposto {

    private object $xml;
    public float $valor_total_tributo;
    public object $icms;


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([

            'valor_total_tributo'   => 'vtottrib',

        ]);

    }


    private function getAtribute(array $atributes) :void
    {

        foreach($atributes as $atribute => $tag){
            if( isset($this->xml->$tag) ){
                $this->$atribute = (float) trim( (string) $this->xml->$tag );
            }else{
                $this->$atribute = 0;
            }
        }

        $this->getIcms();

    }

    private function getIcms() :void
    {
        $this->icms = new \stdClass();

        $this->icms->cst = isset( $this->xml->icms->icms00->cst ) ? (float) trim( (string) $this->xml->icms->icms00->cst ) : 0;
        $this->icms->base_calculo = isset( $this->xml->icms->icms00->vbc ) ? (float) trim( (string) $this->xml->icms->icms00->vbc ) : 0;
        $this->icms->percentual = isset( $this->xml->icms->icms00->picms ) ? (float) trim( (string) $this->xml->icms->icms00->picms ) : 0;
        $this->icms->valor = isset( $this->xml->icms->icms00->vicms ) ? (float) trim( (string) $this->xml->icms->icms00->vicms ) : 0;

    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){

        $return = new \stdClass();
        $return->valor_total_tributo = $this->valor_total_tributo;
        $return->icms = $this->icms;

        return $return;
    }

}
