<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class GrupoAdicoesNFE {
    use Atributes;

    private object $xml;
    public string | null $numero_adicao;
    public string | null $numero_sequencial;
    public string | null $codigo_fabricante_estrangeiro;
    public string | null $valor_desconto_adicao;
    public string | null $numero_drawback;

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'numero_adicao' => 'nadicao',
            'numero_sequencial' => 'nseqadic',
            'codigo_fabricante_estrangeiro' => 'cfabricante',
            'valor_desconto_adicao' => 'vdescdi',
            'numero_drawback' => 'ndrawadicoes',
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
        $return->numero_adicao = $this->numero_adicao;
        $return->numero_sequencial = $this->numero_sequencial;
        $return->codigo_fabricante_estrangeiro = $this->codigo_fabricante_estrangeiro;
        $return->valor_desconto_adicao = $this->valor_desconto_adicao;

        return $return;
    }

}
