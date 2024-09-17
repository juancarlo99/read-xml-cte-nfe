<?php
declare(strict_types=1);

namespace Xml\Util\Models;

use Xml\Util\Models\Endereco;
use Xml\Util\Models\Traits\Atributes;


class Entidade {
    use Atributes;

    private object $xml;
    private string $type;
    public string | null $cnpj;
    public string | null $iscricao_estadual;
    public string | null $nome;
    public string | null $fone;
    public string | null $email;
    public string | null $inscricao_municipal;
    public string | null $cnae;
    public int | null $codigo_regime_tributario;

    protected $tipos_int = [
        'codigo_regime_tributario',
    ];

    protected $tipos_float = [];


    public Endereco $endereco;


    function __construct( object $xml, string $type){

        $this->xml = $xml;

        $ender = 'ender';

        $this->type = $ender.$type;

        $this->getAtribute([

            'nome' => 'xnome',
            'nome_fantasia' => 'xfant',
            'cnpj' => 'cnpj',
            'cpf' => 'cpf',
            'iscricao_estadual'   => 'ie',
            'codigo_regime_tributario'  => 'crt',
            'fone' => 'fone',
            'email' => 'email',
            'inscricao_municipal' => 'im',
            'cnae' => 'cnae',


        ]);
        
        $this->getEndereco();
    }

    private function getEndereco() :void
    {

        $type = $this->type;
        $this->endereco = new Endereco( $this->xml->$type );

    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
        $return->cnpj = $this->cnpj;
        $return->iscricao_estadual = $this->iscricao_estadual;
        $return->nome = $this->nome;
        $return->fone = $this->fone;
        $return->codigo_regime_tributario = $this->codigo_regime_tributario;
        $return->email = $this->email;
        $return->inscricao_municipal = $this->inscricao_municipal;
        $return->cnae = $this->cnae;

        $return->endereco = $this->endereco->toObject();

        return $return;
    }

    public function toArray(){
        return get_object_vars($this->toObject());
    }
    

}
