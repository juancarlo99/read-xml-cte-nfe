<?php

namespace Xml\Util\Models\Traits;

trait Atributes
{
    private function getAtribute(array $atributes) :void
    {

        foreach($atributes as $atribute => $tag){
            if( isset($this->xml->$tag) ){

                if(isset($this->tipos_int)){
                    if( in_array($atribute, $this->tipos_int) ){
                        $this->$atribute = (int) trim( (string) $this->xml->$tag );
                        continue;
                    }
                }

                if(isset($this->tipos_float)){
                    if( in_array($atribute, $this->tipos_float) ){
                        $this->$atribute = (float) trim( (string) $this->xml->$tag );
                        continue;
                    }
                }

                if(isset($this->tipos_bool)){
                    if( in_array($atribute, $this->tipos_bool) ){
                        $this->$atribute = (bool) trim( (string) $this->xml->$tag );
                        continue;
                    }
                }

                $this->$atribute = trim( (string) $this->xml->$tag );
            }else{
                $this->$atribute = null;
            }
        }

    }
}
