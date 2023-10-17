<?php

namespace Xml\Util\Models\Nfe\Enums\IPI;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class CSTIpi
{

    use EnumTraits;

    /**
     * Entrada com recuperação de crédito
     */
    const ENTRADA_RECUPERACAO_CREDITO = '00';

    /**
     * Entrada tributada com alíquota zero
     */
    const ENTRADA_TRIBUTADA_ALIQUOTA_ZERO = '01';

    /**
     * Entrada isenta
     */
    const ENTRADA_ISENTA = '02';

    /**
     * Entrada não-tributada
     */
    const ENTRADA_NAO_TRIBUTADA = '03';

    /**
     * Entrada imune
     */
    const ENTRADA_IMUNE = '04';

    /**
     * Entrada com suspensão
     */
    const ENTRADA_COM_SUSPENSAO = '05';
    
    /**
     * Saída tributada com alíquota zero
     */
    const SAIDA_TRIBUTADA_ALIQUOTA_ZERO = '51';

    /**
     * Saída isenta
     */
    const SAIDA_ISENTA = '52';

    /**
     * Saída não-tributada
     */
    const SAIDA_NAO_TRIBUTADA = '53';

    /**
     * Saída imune
     */
    const SAIDA_IMUNE = '54';

    /**
     * Saída com suspensão
     */
    const SAIDA_COM_SUSPENSAO = '55';

    /**
     * Outras entradas
     */
    const OUTRAS_ENTRADAS = '49';

    /**
     * Saída tributada
     */
    const SAIDA_TRIBUTADA = '50';

    /**
     * Outras saídas
     */
    const OUTRAS_SAIDAS = '99';

     const DESCRICOES = [
        self::ENTRADA_RECUPERACAO_CREDITO => 'Entrada com recuperação de crédito',
        self::ENTRADA_TRIBUTADA_ALIQUOTA_ZERO => 'Entrada tributada com alíquota zero',
        self::ENTRADA_ISENTA => 'Entrada isenta',
        self::ENTRADA_NAO_TRIBUTADA => 'Entrada não-tributada',
        self::ENTRADA_IMUNE => 'Entrada imune',
        self::ENTRADA_COM_SUSPENSAO => 'Entrada com suspensão',
        self::SAIDA_TRIBUTADA_ALIQUOTA_ZERO => 'Saída tributada com alíquota zero',
        self::SAIDA_ISENTA => 'Saída isenta',
        self::SAIDA_NAO_TRIBUTADA => 'Saída não-tributada',
        self::SAIDA_IMUNE => 'Saída imune',
        self::SAIDA_COM_SUSPENSAO => 'Saída com suspensão',
        self::OUTRAS_ENTRADAS => 'Outras entradas',
        self::SAIDA_TRIBUTADA => 'Saída tributada',
        self::OUTRAS_SAIDAS => 'Outras saídas',
    ];

}