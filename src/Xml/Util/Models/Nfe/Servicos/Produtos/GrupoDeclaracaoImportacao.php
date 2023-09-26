<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class GrupoDeclaracaoImportacao {
    use Atributes;

    private object $xml;
    public string | null $numero_declaracao_importacao;
    public string | null $data_registro;
    public string | null $local_desembaraco;
    public string | null $uf_desembaraco;
    public string | null $codigo_exportador;
    public string | null $data_desembaraco;
    public string | null $cnpj_adquirente;
    public string | null $uf_adquirente;

    public int | null $via_transporte;
    public int | null $tipo_intermediacao;

    public float | null $valor_da_afrmm;

    protected $tipos_int = [
        'via_transporte',
        'tipo_intermediacao'
    ];

    protected $tipos_float = [
        'valor_da_afrmm'
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'numero_declaracao_importacao' => 'ndi',
            'data_registro' => 'ddi',
            'local_desembaraco' => 'xlocdesemb',
            'uf_desembaraco' => 'ufdesemb',
            'codigo_exportador' => 'cexportador',
            'data_desembaraco' => 'dtdesemb',
            'via_transporte' => 'tpviatransp',
            'valor_da_afrmm' => 'vafrmm',
            'tipo_intermediacao' => 'tpintermedio',
            'cnpj_adquirente' => 'cnpj_adq',
            'uf_adquirente' => 'ufterceiro'

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
        $return->numero_declaracao_importacao = $this->numero_declaracao_importacao;
        $data_registro = $this->data_registro ? \DateTime::createFromFormat('Y-m-d', $this->data_registro) : null;
        $return->data_registro = $data_registro ? $data_registro->format('Y-m-d H:i:s') : null;
        $return->local_desembaraco = $this->local_desembaraco;
        $return->uf_desembaraco = $this->uf_desembaraco;
        $return->codigo_exportador = $this->codigo_exportador;
        $data_desembaraco = $this->data_desembaraco ? \DateTime::createFromFormat('Y-m-d', $this->data_desembaraco) : null;
        $return->data_desembaraco = $data_desembaraco ? $data_desembaraco->format('Y-m-d H:i:s') : null;
        $return->via_transporte = $this->via_transporte;
        $return->valor_da_afrmm = $this->valor_da_afrmm;
        $return->tipo_intermediacao = $this->tipo_intermediacao;
        $return->cnpj_adquirente = $this->cnpj_adquirente;
        $return->uf_adquirente = $this->uf_adquirente;

        return $return;
    }

}
