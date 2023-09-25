<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe;

use Xml\Util\Models\Nfe\Enums\TipoOperacao;
use Xml\Util\Models\Traits\Atributes;


class IdentificacaoNFE {

    use Atributes;

    private object $xml;

    public string | null $codigo_numerico;
    public string | null $cfop;
    public string | null $natureza_operacao;
    public string | null $serie;
    public string | null $numero_nfe;
    public string | null $data_emissao;
    public string | null $data_saida_entrada;
    public string | null $versao_processo_emissao;
    public string | null $codigo_municipio_icms;
    public string | null $codigo_compoe_chave;
    public string | null $Justificativa_entrada_contingencia;
    public string | null $data_entrada_contingencia;
    public string | null $email_para_recebimento_arquivos;
    public string | null $numero_pedido;
    public int | null $uf;
    public int | null $modelo_nfe;
    public int | null $tipo_operacao;
    public int | null $tipo_ambiente;
    public int | null $local_destino_operacao;
    public int | null $operacao_consumidor_final;
    public int | null $operacao_presenca_comprador;
    public int | null $indentificador_de_intermediador;
    public int | null $tipo_impressao;
    public int | null $tipo_emissao;
    public int | null $finalidade_emissao;
    public int | null $processo_emissao;
    public int | null $digito_verificador;


    protected $tipos_int = [
        'uf',
        'modelo_nfe',
        'tipo_operacao',
        'local_destino_operacao',
        'operacao_consumidor_final',
        'operacao_presenca_comprador',
        'indentificador_de_intermediador',
        'tipo_impressao',
        'tipo_emissao',
        'tipo_ambiente',
        'finalidade_emissao',
        'processo_emissao',
        'digito_verificador',

    ];

    protected $tipos_float = [

    ];


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'codigo_numerico' => 'cNF',
            'uf' => 'cuf',
            'cfop' => 'cfop',
            'natureza_operacao' => 'natop',
            'modelo_nfe' => 'mod',
            'serie' => 'serie',
            'numero_nfe' => 'nnf', 
            'data_emissao' => 'dhemi', 
            'fuso_horario' => 'fusohorario',
            'data_saida_entrada' => 'dhsaient',
            'tipo_operacao' => 'tpnf',
            'local_destino_operacao' => 'iddest',
            'operacao_consumidor_final' => 'indfinal',
            'operacao_presenca_comprador' => 'indpres',
            'indentificador_de_intermediador' => 'indintermed',
            'codigo_municipio_icms' => 'cmunfg',
            'tipo_impressao' => 'tpimp',
            'tipo_emissao' => 'tpemis', 
            'tipo_ambiente' => 'tpamb',
            'Justificativa_entrada_contingencia' => 'xjust',
            'data_entrada_contingencia' => 'dhcont',
            'finalidade_emissao' => 'finnfe',
            'email_para_recebimento_arquivos' => 'Emailarquivos',
            'numero_pedido' => 'numeropedido',
            'processo_emissao' => 'procemi',
            'versao_processo_emissao' => 'verproc',
            'digito_verificador' => 'cdv',

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

        $data_emissao = new \DateTime($this->data_emissao);
        $return->data_emissao = $data_emissao->format('Y-m-d H:i:s');
        $data_saida_entrada = new \DateTime($this->data_saida_entrada);
        $return->data_saida_entrada = $data_saida_entrada->format('Y-m-d H:i:s');

        $return->codigo_numerico = $this->codigo_numerico;
        $return->uf = $this->uf;
        $return->cfop = $this->cfop;
        $return->natureza_operacao = $this->natureza_operacao;
        $return->modelo_nfe = $this->modelo_nfe;
        $return->serie = $this->serie;
        $return->numero_nfe = $this->numero_nfe;
        $return->data_emissao = $this->data_emissao;
        $return->fuso_horario = $this->fuso_horario;
        $return->data_saida_entrada = $this->data_saida_entrada;
        $return->tipo_operacao = $this->tipo_operacao;
        $return->local_destino_operacao = $this->local_destino_operacao;
        $return->operacao_consumidor_final = $this->operacao_consumidor_final;
        $return->operacao_presenca_comprador = $this->operacao_presenca_comprador;
        $return->indentificador_de_intermediador = $this->indentificador_de_intermediador;
        $return->codigo_municipio_icms = $this->codigo_municipio_icms;
        $return->tipo_impressao = $this->tipo_impressao;
        $return->tipo_emissao = $this->tipo_emissao;
        $return->tipo_ambiente = $this->tipo_ambiente;
        $return->Justificativa_entrada_contingencia = $this->Justificativa_entrada_contingencia;
        $return->data_entrada_contingencia = $this->data_entrada_contingencia;
        $return->finalidade_emissao = $this->finalidade_emissao;
        $return->email_para_recebimento_arquivos = $this->email_para_recebimento_arquivos;
        $return->numero_pedido = $this->numero_pedido;
        $return->processo_emissao = $this->processo_emissao;
        $return->versao_processo_emissao = $this->versao_processo_emissao;
        $return->digito_verificador = $this->digito_verificador;

        return $return;
    }

    public function toArray(){
        return get_object_vars($this->toObject());
    }

}
