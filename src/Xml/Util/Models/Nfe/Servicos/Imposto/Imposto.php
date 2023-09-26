<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Servicos\Imposto\ICMS\ICMS;




class Imposto {
    use Atributes;

    private object $xml;
    public string | null $valor_total_tributos;

    public object | null $icms = null;

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'valor_total_tributos' => 'vtottrib',
        ]);
        
        $this->getICMS();
    }

    
    public function getICMS()
    {

        foreach($this->xml->icms as $icms){
            if($icms){
                foreach ($icms as $key => $icms_xml) {

                    $icms_ob = new ICMS($icms_xml);
                    $this->icms= $icms_ob->toObject();
                }

            }
        }
    }

    /**
    * Faz a converssão de classe php para Object.
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
        $return->valor_total_tributos = $this->valor_total_tributos;
        $return->icms = $this->icms;
      
        return $return;
    }

}
