<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos\Combustivel;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Servicos\Produtos\Combustivel\GrupoCideCombustivel;
use Xml\Util\Models\Nfe\Servicos\Produtos\Combustivel\GrupoEncerranteCombustivel;


class DetalhamentoEspecificoCombustiveis {
    use Atributes;

    private object $xml;
    public string | null $codigo_produto_anp;
    public string | null $codigo_autorizacao;
    public string | null $quantidade;
    public string | null $uf;
    public string | null $descricao_anp;
    public string | null $percentual_petroleo;
    public string | null $percentual_gas_natural_nacional;
    public string | null $percentual_gas_natural_importado;
    public string | null $valor_partida;
    public string | null $percentual_indice_mistura_biodiesel;


    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'codigo_produto_anp' => 'cprodanp',
            'codigo_autorizacao' => 'codif',
            'quantidade' => 'qtemp',
            'uf' => 'ufcons',
            'descricao_anp' => 'descanp',
            'percentual_petroleo' => 'pglp',
            'percentual_gas_natural_nacional' => 'pgnn',
            'percentual_gas_natural_importado' => 'pgni',
            'valor_partida' => 'vpart',
            'percentual_indice_mistura_biodiesel' => 'pbio',

        ]);

        $this->getGrupoCideCombustivel();
        $this->getGrupoEncerranteCombustivel();
    }

    public function getGrupoCideCombustivel()
    {   
        $grupoCideCombustivel = new GrupoCideCombustivel($this->xml->cide);
        return $grupoCideCombustivel->toObject();
    }

    public function getGrupoEncerranteCombustivel()
    {
        $grupoEncerranteCombustivel = new GrupoEncerranteCombustivel($this->xml->encerrante);
        return $grupoEncerranteCombustivel->toObject();
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
        $return->percentual_petroleo = $this->percentual_petroleo;
        $return->percentual_gas_natural_nacional = $this->percentual_gas_natural_nacional;
        $return->percentual_gas_natural_importado = $this->percentual_gas_natural_importado;
        $return->valor_partida = $this->valor_partida;
        $return->percentual_indice_mistura_biodiesel = $this->percentual_indice_mistura_biodiesel;

        return $return;
    }

}
