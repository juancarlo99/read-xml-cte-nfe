<?php
declare(strict_types=1);

namespace Xml\Util\Models;

use Carbon\Carbon;

class CabecalhoCte {

    const TOMADOR_REMETENTE = 0;
    const TOMADOR_EXPEDIDOR = 1;
    const TOMADOR_RECEBEDOR = 2;
    const TOMADOR_DESTINATARIO = 3;
    const TOMADOR_OUTROS = 4;

    private object $xml;
    public string $uf;
    public string $cfop;
    public string $natureza_operacao;
    public string $modelo_cte;
    public string $serie;
    public string $numero_cte;
    public string $data_emissao;
    public string $tipo_emissao;
    public string $modal;
    public string $uf_inicio;
    public string $nome_municipio_inicio;
    public string $codigo_municipio_inicio;
    public string $uf_fim;
    public string $nome_municipio_fim;
    public string $codigo_municipio_fim;
    public string $retira;
    public string $tipo_servico;
    public string $uf_envio;
    public string $nome_municipio_envio;
    public string $codigo_municipio_envio;
    public string $tipo_cte;
    public string $codigo_cte;
    public string $tipo_imposto;
    public string $digito_verificador;
    public int $tomador;
    public object $dados_tomador;


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'uf'                        => 'cuf',
            'cfop'                      => 'cfop',
            'natureza_operacao'         => 'natop',
            'modelo_cte'                => 'mod',
            'serie'                     => 'serie',
            'numero_cte'                => 'nct', 
            'data_emissao'              => 'dhemi', 
            'tipo_emissao'              => 'tpemis', 
            'modal'                     => 'modal',
            'uf_inicio'                 => 'ufIni',
            'nome_municipio_inicio'     => 'xmunini',
            'codigo_municipio_inicio'   => 'cmunini',
            'uf_fim'                    => 'uffim',
            'nome_municipio_fim'        => 'xmunfim',
            'codigo_municipio_fim'      => 'cmunfim',
            'retira'                    => 'retira',
            'tipo_servico'              => 'tpserv',
            'uf_envio'                  => 'ufenv',
            'nome_municipio_envio'      => 'xmunenv',
            'codigo_municipio_envio'    => 'cmunenv',
            'tipo_cte'                  => 'tpcte',
            'codigo_cte'                => 'cct',
            'tipo_imposto'              => 'tpimp',
            'digito_verificador'        => 'cdv',
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

        $this->getTomador();

    }

    private function getTomador(){

        $tomador = 4;

        if( isset( $this->xml->toma3) ){
            $tomador = (int) $this->xml->toma3->toma;
        }else{
            $tomador = (int)  $this->xml->toma3->toma4;
        }

        $condicoes = [
            self::TOMADOR_REMETENTE,
            self::TOMADOR_EXPEDIDOR,
            self::TOMADOR_RECEBEDOR,
            self::TOMADOR_DESTINATARIO,
            self::TOMADOR_OUTROS,
         ];

        $this->tomador = $condicoes[$tomador];

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
        $return->modelo_cte = $this->modelo_cte;
        $return->serie = $this->serie;
        $return->numero_cte = $this->numero_cte;
        $return->data_emissao = Carbon::parse( $this->data_emissao )->format('Y-m-d H:m:s');
        $return->tipo_emissao = $this->tipo_emissao;
        $return->modal = $this->modal;
        $return->uf_inicio = $this->uf_inicio;
        $return->nome_municipio_inicio = $this->nome_municipio_inicio;
        $return->codigo_municipio_inicio = $this->codigo_municipio_inicio;
        $return->uf_fim = $this->uf_fim;
        $return->nome_municipio_fim = $this->nome_municipio_fim;
        $return->codigo_municipio_fim = $this->codigo_municipio_fim;
        $return->retira = $this->retira;
        $return->tipo_servico = $this->tipo_servico;
        $return->uf_envio = $this->uf_envio;
        $return->nome_municipio_envio = $this->nome_municipio_envio;
        $return->codigo_municipio_envio = $this->codigo_municipio_envio;
        $return->tipo_cte = $this->tipo_cte;
        $return->codigo_cte = $this->codigo_cte;
        $return->tipo_imposto = $this->tipo_imposto;
        $return->digito_verificador = $this->digito_verificador;
        $return->tomador = $this->tomador;

        return $return;
    }

}
