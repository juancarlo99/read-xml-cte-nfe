<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class GrupoNVE {
    use Atributes;

    private object $xml;
    public string | null $nomeclatura_valor_aduaneiro_e_estatistico;

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'nomeclatura_valor_aduaneiro_e_estatistico' => 'cnve',
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
        $return->nomeclatura_valor_aduaneiro_e_estatistico = $this->nomeclatura_valor_aduaneiro_e_estatistico;

        return $return;
    }

}
