<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos;


class Servicos {

    private object $xml;
    public float $valor_total_servico;
    public float $valor_a_receber;
    public array $items = [];


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([

            'valor_total_servico'  => 'vtprest',
            'valor_a_receber'      => 'vrec',

        ]);

        $this->getItems();

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

    private function getItems() :void
    {   
        foreach($this->xml->comp as $item){

            $this->items[] = [
                'nome' =>  trim( (string) $item->xnome ),
                'valor' => (float) trim( (string) $item->vcomp )
            ];

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
        $return->valor_total_servico = $this->valor_total_servico;
        $return->valor_a_receber = $this->valor_a_receber;
        $return->items = $this->items;

        return $return;
    }

}
