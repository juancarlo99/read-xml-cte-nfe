<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class DetalhamentoEspecificoDeVeiculosNovos {
    use Atributes;

    private object $xml;
    public string | null $chassi;
    public string | null $codigo_cor;
    public string | null $descricao_cor;
    public string | null $potencia_motor;
    public string | null $cilindradas;
    public string | null $peso_liquido;
    public string | null $peso_bruto;
    public string | null $numero_serie;
    public string | null $numero_motor;
    public string | null $capacidade_maxima_tracao;
    public string | null $distancia_eixos;
    public string | null $ano_modelo;
    public string | null $ano_fabricacao;
    public string | null $tipo_pintura;
    public string | null $tipo_veiculo;
    public string | null $condicao_do_vin;
    public string | null $codigo_marca_modelo;

    public int | null $tipo_operacao;
    public int | null $tipo_combustivel;
    public int | null $especie_veiculo;

    public int | null $condicao_do_veiculo;
    public int | null $codigo_cor_denatran;
    public int | null $lotacao;


    protected $tipos_int = [
        'tipo_operacao',
        'tipo_combustivel',
        'especie_veiculo',
        'condicao_do_veiculo',
        'codigo_cor_denatran',
        'lotacao',
    ];
    protected $tipos_float = [
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'tipo_operacao' => 'tpop',
            'chassi' => 'chassi',
            'codigo_cor' => 'ccor',
            'descricao_cor' => 'xcor',
            'potencia_motor' => 'pot',
            'cilindradas' => 'cilin',
            'peso_liquido' => 'pesol',
            'peso_bruto' => 'pesob',
            'numero_serie' => 'nserie',
            'tipo_combustivel' => 'tpcomb',
            'numero_motor' => 'nmotor',
            'capacidade_maxima_tracao' => 'cmt',
            'distancia_eixos' => 'dist',
            'ano_modelo' => 'anomod',
            'ano_fabricacao' => 'anofab',
            'tipo_pintura' => 'tppint',
            'tipo_veiculo' => 'tpveic',
            'especie_veiculo' => 'espveic',
            'condicao_do_vin' => 'vin',
            'condicao_do_veiculo' => 'condveic',
            'codigo_marca_modelo' => 'cmod',
            'codigo_cor_denatran' => 'ccordenatran',
            'lotacao' => 'lota',
            'restricao' => 'tprest',

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
        $return->tipo_operacao = $this->tipo_operacao;
        $return->chassi = $this->chassi;
        $return->codigo_cor = $this->codigo_cor;
        $return->descricao_cor = $this->descricao_cor;
        $return->potencia_motor = $this->potencia_motor;
        $return->cilindradas = $this->cilindradas;
        $return->peso_liquido = $this->peso_liquido;
        $return->peso_bruto = $this->peso_bruto;
        $return->numero_serie = $this->numero_serie;
        $return->tipo_combustivel = $this->tipo_combustivel;
        $return->numero_motor = $this->numero_motor;
        $return->capacidade_maxima_tracao = $this->capacidade_maxima_tracao;
        $return->distancia_eixos = $this->distancia_eixos;
        $return->ano_modelo = $this->ano_modelo;
        $return->ano_fabricacao = $this->ano_fabricacao;
        $return->tipo_pintura = $this->tipo_pintura;
        $return->tipo_veiculo = $this->tipo_veiculo;
        $return->especie_veiculo = $this->especie_veiculo;
        $return->condicao_do_vin = $this->condicao_do_vin;
        $return->condicao_do_veiculo = $this->condicao_do_veiculo;
        $return->codigo_marca_modelo = $this->codigo_marca_modelo;
        $return->codigo_cor_denatran = $this->codigo_cor_denatran;
        $return->lotacao = $this->lotacao;
        $return->restricao = $this->restricao;

        return $return;
    }

}
