<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;

class modalidadeDeDeterminacaoDaBCDoICMSSt
{

    /**
     * Preço tabelado ou máximo sugerido
     */
    const PRECO_TABELADO_MAXIMO_SUGERIDO = 0;

    /**
     * Lista Negativa (valor)
     */
    const LISTA_NEGATIVA = 1;

    /**
     * Lista Positiva (valor)
     */
    const LISTA_POSITIVA = 2;

    /**
     * Lista Neutra (valor)
     */
    const LISTA_NEUTRA = 3;

    /**
     * Margem Valor Agregado (%)
     */
    const MARGEM_VALOR_AGREGADO = 4;

    /**
     * Pauta (valor)
     */
    const PAUTA = 5;

    /**
     * Valor da Operação
     */
    const VALOR_DA_OPERACAO = 6;


    public function getDescricao(int $codigo): string
    {
        switch ($codigo) {
            case self::PRECO_TABELADO_MAXIMO_SUGERIDO:
                return 'Preço tabelado ou máximo sugerido';
            case self::LISTA_NEGATIVA:
                return 'Lista Negativa (valor)';
            case self::LISTA_POSITIVA:
                return 'Lista Positiva (valor)';
            case self::LISTA_NEUTRA:
                return 'Lista Neutra (valor)';
            case self::MARGEM_VALOR_AGREGADO:
                return 'Margem Valor Agregado (%)';
            case self::PAUTA:
                return 'Pauta (valor)';
            case self::VALOR_DA_OPERACAO:
                return 'Valor da Operação';
            default:
                return '';
            
        }
    }

}