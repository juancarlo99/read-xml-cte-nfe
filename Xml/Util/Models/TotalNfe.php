<?php
declare(strict_types=1);

namespace Xml\Util\Models;


class TotalNfe {


    private object $xml;

    public float $valor_base_icms;
    public float $valor_total_icms;
    public float $valor_total_icms_desonerado;
    public float $valor_pis;
    public float $valor_cofins;
    public float $valor_nfe;


    function __construct( object $xml){

        $this->xml = $xml->icmstot;

        $this->getAtribute([

            'valor_base_icms'               => 'vBC',
            'valor_total_icms'              => 'vicms',
            'valor_total_icms_desonerado'   => 'vicmsdeson',
            'valor_pis'                     => 'vpis',
            'valor_cofins'                  => 'vcofins',
            'valor_nfe'                     => 'vnf'

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

    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
       
        $return->valor_base_icms = $this->valor_base_icms;
        $return->valor_total_icms = $this->valor_total_icms;
        $return->valor_total_icms_desonerado = $this->valor_total_icms_desonerado;
        $return->valor_pis = $this->valor_pis;
        $return->valor_cofins = $this->valor_cofins;
        $return->valor_nfe = $this->valor_nfe;

        return $return;
    }

}
