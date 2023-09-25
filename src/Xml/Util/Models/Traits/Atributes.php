<?php

namespace Xml\Util\Models\Traits;

trait Atributes
{
    private function getAtribute(array $atributes) :void
    {

        foreach($atributes as $atribute => $tag){
            if( isset($this->xml->$tag) ){

                if( in_array($atribute, $this->tipos_int) ){
                    $this->$atribute = (int) trim( (string) $this->xml->$tag );
                    continue;
                }
                

                $this->$atribute = trim( (string) $this->xml->$tag );
            }else{
                $this->$atribute = null;
            }
        }

    }
}
