<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos\Combustivel;

use Xml\Util\Models\Traits\Atributes;


class GrupoCideCombustivel {
    use Atributes;

    private object $xml;
    public string | null $bc_da_cide;
    public float | null $valor_aliquota;
    public float | null $valor;


    protected $tipos_float = [
        'valor_aliquota',
        'valor',
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'bc_da_cide' => 'qbcprod',
            'valor_aliquota' => 'valiqprod',
            'valor' => 'vcide',
        ]);
    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
        $return->bc_da_cide = $this->bc_da_cide;
        $return->valor_aliquota = $this->valor_aliquota;
        $return->valor = $this->valor;

        return $return;
    }

}
