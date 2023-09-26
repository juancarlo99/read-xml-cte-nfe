<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;

class ModalidadeDeDeterminacaoDaBCdoICMS
{
    /**
     * Margem Valor Agregado (%)
     */
    const MARGEM_VALOR_AGREGADO = 0;

    /**
     * Pauta (Valor)
     */
    const PAUTA = 1;

    /**
     * Preço Tabelado Máx. (valor)
     */
    const PRECO_TABELADO_MAX = 2;

    /**
     * Valor da operação
     */
    const VALOR_DA_OPERACAO = 3;

    public function getDescricao(int $codigo): string
    {
        switch ($codigo) {
            case self::MARGEM_VALOR_AGREGADO:
                return 'Margem Valor Agregado (%)';
            case self::PAUTA:
                return 'Pauta (Valor)';
            case self::PRECO_TABELADO_MAX:
                return 'Preço Tabelado Máx. (valor)';
            case self::VALOR_DA_OPERACAO:
                return 'Valor da operação';
            default:
                return '';
        }
    }

}