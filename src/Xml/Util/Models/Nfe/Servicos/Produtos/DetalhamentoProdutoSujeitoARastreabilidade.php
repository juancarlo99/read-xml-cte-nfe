<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class DetalhamentoProdutoSujeitoARastreabilidade {
    use Atributes;

    private object $xml;
    public string | null $nomero_lote;
    public string | null $quantidade_lote;
    public string | null $data_fabricacao;
    public string | null $data_validade;
    public string | null $codigo_agregacao;


    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'nomero_lote' => 'nlote',
            'quantidade_lote' => 'qlote',
            'data_fabricacao' => 'dfab',
            'data_validade' => 'dval',
            'codigo_agregacao' => 'cagreg',

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
        $return->nomero_lote = $this->nomero_lote;
        $return->quantidade_lote = $this->quantidade_lote;
        $data_fabricacao = $this->data_fabricacao ? \DateTime::createFromFormat('Y-m-d', $this->data_fabricacao) : null;
        $return->data_fabricacao = $data_fabricacao ? $data_fabricacao->format('Y-m-d H:i:s') : null;
        $data_validade = $this->data_validade ? \DateTime::createFromFormat('Y-m-d', $this->data_validade) : null;
        $return->data_validade = $data_validade ? $data_validade->format('Y-m-d H:i:s') : null;
        $return->codigo_agregacao = $this->codigo_agregacao;

        return $return;
    }

}
