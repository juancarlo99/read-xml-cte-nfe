<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos;

use Xml\Util\Models\Nfe\Servicos\ItensServico;

class Servicos {

    private object $xml;
    public array $items = [];


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getItems();

    }


    private function getItems() :void
    {   
        foreach($this->xml as $value){
            $itens = new ItensServico($value);
            $this->items[] =  $itens->toObject();
        }

        dd($this->items);
       
    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
        $return->items = $this->items;

        return $return;
    }

}
