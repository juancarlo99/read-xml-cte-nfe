<?php
declare(strict_types=1);

namespace Xml\Util\Models;


class CabecalhoNfe {

    private object $xml;
    public string $uf;
    public string $cfop;
    public string $natureza_operacao;
    public string $modelo_nfe;
    public string $serie;
    public string $numero_nfe;
    public string $data_emissao;
    public string $data_saida_entrada;
    public string $tipo_emissao;
    public string $uf_inicio;
    public string $tipo_ambiente;
    public string $tipo_imposto;
    public string $finalidade_emissao;
    public string $processo_emissao;
    public string $versao_processo_emissao;
    public string $digito_verificador;
    public string $codigo_municipio_icms;
    public string $local_destino_operacao;
    public string $codigo_compoe_chave;
    


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'uf'                        => 'cuf',
            'cfop'                      => 'cfop',
            'natureza_operacao'         => 'natop',
            'modelo_nfe'                => 'mod',
            'serie'                     => 'serie',
            'numero_nfe'                => 'nnf', 
            'data_emissao'              => 'dhemi', 
            'data_saida_entrada'        => 'dhsaient',
            'tipo_emissao'              => 'tpemis', 
            'uf_inicio'                 => 'ufIni',
            'tipo_ambiente'             => 'tpamb',
            'tipo_imposto'              => 'tpimp',
            'finalidade_emissao'        => 'finnfe',
            'processo_emissao'          => 'procemi',
            'versao_processo_emissao'   => 'verproc',
            'digito_verificador'        => 'cdv',
            'codigo_municipio_icms'     => 'cmunfg',
            'local_destino_operacao'    => 'iddest',
            'codigo_compoe_chave'       => 'cnf'

        ]);

    }

    private function getAtribute(array $atributes) :void
    {

        foreach($atributes as $atribute => $tag){
            if( isset($this->xml->$tag) ){
                $this->$atribute = trim( (string) $this->xml->$tag );
            }else{
                $this->$atribute = "";
            }
        }

    }


    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();

        $return->uf = $this->uf;
        $return->cfop = $this->cfop;
        $return->natureza_operacao = $this->natureza_operacao;
        $return->modelo_nfe = $this->modelo_nfe;
        $return->serie = $this->serie;
        $return->numero_nfe = $this->numero_nfe;
        $data_emissao = new \DateTime($this->data_emissao);
        $return->data_emissao = $data_emissao->format('Y-m-d H:i:s');
        $data_saida_entrada = new \DateTime($this->data_saida_entrada);
        $return->data_saida_entrada = $data_saida_entrada->format('Y-m-d H:i:s');
        $return->tipo_emissao = $this->tipo_emissao;
        $return->uf_inicio = $this->uf_inicio;
        $return->tipo_ambiente = $this->tipo_ambiente;
        $return->tipo_imposto = $this->tipo_imposto;
        $return->finalidade_emissao = $this->finalidade_emissao;
        $return->processo_emissao = $this->processo_emissao;
        $return->versao_processo_emissao = $this->versao_processo_emissao;
        $return->digito_verificador = $this->digito_verificador;
        $return->codigo_municipio_icms = $this->codigo_municipio_icms;
        $return->local_destino_operacao = $this->local_destino_operacao;
        $return->codigo_compoe_chave = $this->codigo_compoe_chave;

        return $return;
    }

}
