<?php
declare(strict_types=1);

namespace Xml\Util\Models;

use Xml\Util\Models\Endereco;


class Entidade {

    private object $xml;
    private string $type;
    public string $cnpj;
    public string $iscricao_estadual;
    public string $nome;
    public string $fone;
    public string $crt;
    public string $email;


    public Endereco $endereco;


    function __construct( object $xml, string $type){

        $this->xml = $xml;

        $ender = 'ender';

        $this->type = $ender.$type;

        $this->getAtribute([

            'nome' => 'xnome',
            'cnpj' => 'cnpj',
            'iscricao_estadual'   => 'ie',
            'crt'  => 'crt',
            'fone' => 'fone',
            'email' => 'email'


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
        $return->crt = $this->crt;
        $return->email = $this->email;

        $return->endereco = $this->endereco->toObject();

        return $return;
    }

}
