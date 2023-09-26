<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos\Combustivel;

use Xml\Util\Models\Traits\Atributes;


class GrupoIndicadorOrigemCombustivel {
    use Atributes;

    private object $xml;
    public string | null $indicador_importacao;
    public string | null $uf;
    public string | null $percentual_original_pela_uf;

    protected $tipos_float = [
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'indicador_importacao' => 'indimport',
            'uf' => 'cuforig',
            'percentual_original_pela_uf' => 'porig',
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
        $return->indicador_importacao = $this->indicador_importacao;
        $return->uf = $this->uf;
        $return->percentual_original_pela_uf = $this->percentual_original_pela_uf;

        return $return;
    }

}
