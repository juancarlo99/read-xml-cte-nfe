<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class DetalhamentoEspecificoArmamento {
    use Atributes;

    private object $xml;
    public string | null $tipo_armamento;
    public string | null $numero_serie_armamento;
    public string | null $numero_serie_cano;
    public string | null $descricao;

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'tipo_armamento' => 'tparma',
            'numero_serie_armamento' => 'nserie',
            'numero_serie_cano' => 'ncano',
            'descricao' => 'descr',
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
        $return->tipo_armamento = $this->tipo_armamento;
        $return->numero_serie_armamento = $this->numero_serie_armamento;
        $return->numero_serie_cano = $this->numero_serie_cano;
        $return->descricao = $this->descricao;

        return $return;
    }

}
