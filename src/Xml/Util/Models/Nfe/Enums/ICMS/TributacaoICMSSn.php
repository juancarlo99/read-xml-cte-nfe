<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class TributacaoICMSSn
{

    use EnumTraits;

    /**
     * Tributada pelo Simples Nacional com permissão de crédito
     */
    const TRIBUTADA_PELO_SIMPLES_NACIONAL_COM_PERMISSAO_DE_CREDITO = '101';

    /**
     * Tributada pelo Simples Nacional sem permissão de crédito
     */
    const TRIBUTADA_PELO_SIMPLES_NACIONAL_SEM_DE_CREDITO = '102';

    /**
     * Isenção do ICMS  no Simples Nacional para faixa de receita bruta.
     */
    const ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA = '103';

    /**
     * Tributada pelo simples nacional com permissão de credito e com cobrança do ICMS por substituição tributaria
     */
    const TRINUTADA_PELO_SIMPLES_NACIONAL_COM_PERMISSAO_DE_CREDITO_E_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '201';

    /**
     * Tributada pelo simples nacional sem permissão de credito e com cobrança do ICMS por substituição tributaria
     */
    const TRIBUTADA_PELO_SIMPLES_NACIONAL_SEM_PERMISSAO_DE_CREDITO_E_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '202';

    /**
     * Isenção do ICMS no Simples Nacional para faixa de receita bruta e com cobrança do ICMS por substituição tributaria
     */
    const ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA_E_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '203';

    /**
     * Imune
     */
     const IMUNE = '300';

    /**
     * Não tributda pelo Simples Nacional (v.2.0) (v.2.0)
    */
    const NAO_TRIBUTADA_PELO_SIMPLES_NACIONAL = '400';

    /**
     * ICMS cobrado anteriormente por substituição tributária (substituído) ou por antecipação
     */
    const ICMS_COBRADO_ANTERIORMENTE_POR_SUBSTITUICAO_TRIBUTARIA_SUBSTITUIDO_OU_POR_ANTECIPACAO = '500';

    /**
     * Outros
     */
    const OUTROS = '900';
    
    const DESCRICOES = [
        self::TRIBUTADA_PELO_SIMPLES_NACIONAL_COM_PERMISSAO_DE_CREDITO => 'Tributada pelo Simples Nacional com permissão de crédito',
        self::TRIBUTADA_PELO_SIMPLES_NACIONAL_SEM_DE_CREDITO => 'Tributada pelo Simples Nacional sem permissão de crédito',
        self::ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA => 'Isenção do ICMS  no Simples Nacional para faixa de receita bruta.',
        self::TRINUTADA_PELO_SIMPLES_NACIONAL_COM_PERMISSAO_DE_CREDITO_E_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Tributada pelo simples nacional com permissão de credito e com cobrança do ICMS por substituição tributaria',
        self::TRIBUTADA_PELO_SIMPLES_NACIONAL_SEM_PERMISSAO_DE_CREDITO_E_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Tributada pelo simples nacional sem permissão de credito e com cobrança do ICMS por substituição tributaria',
        self::ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA_E_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Isenção do ICMS no Simples Nacional para faixa de receita bruta e com cobrança do ICMS por substituição tributaria',
        self::IMUNE => 'Imune',
        self::NAO_TRIBUTADA_PELO_SIMPLES_NACIONAL => 'Não tributda pelo Simples Nacional (v.2.0) (v.2.0)',
        self::ICMS_COBRADO_ANTERIORMENTE_POR_SUBSTITUICAO_TRIBUTARIA_SUBSTITUIDO_OU_POR_ANTECIPACAO => 'ICMS cobrado anteriormente por substituição tributária (substituído) ou por antecipação',
        self::OUTROS => 'Outros',
    ];

}