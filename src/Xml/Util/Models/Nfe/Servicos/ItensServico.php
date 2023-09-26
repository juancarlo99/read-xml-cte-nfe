<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Servicos\Produtos\Produto;
use Xml\Util\Models\Nfe\Servicos\Imposto\Imposto;


class ItensServico {
    use Atributes;

    private object $xml;
    public object $produto;
    public object $imposto;

    protected $tipos_int = [

    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getProduto();
        $this->getImposto();

    }

    public function getProduto(): void
    {
        $produto = new Produto($this->xml->prod);
        $this->produto = $produto->toObject();
    }

    public function getImposto(): void
    {
        $imposto = new Imposto($this->xml->imposto);
        $this->imposto = $imposto->toObject();
    }
    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
        $return->produto = $this->produto;
        $return->imposto = $this->imposto;

        return $return;
    }

}
