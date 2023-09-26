<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;

class TributacaoICMS
{

    /**
     * Tributada integralmente
     */
    const TRIBUTADA_INTEGRALMENTE = '00';

    /**
     * Tributação monofásica própria sobre combustíveis
     */
    const TRIBUTACAO_MONOFASICA_PROPRIA_COMBUSTIVEIS = '02';

    /**
     * Tributada e com cobrança do ICMS por substituição tributária
     */
    const TRIBUTADA_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '10';

    /**
     * Tributação monofásica própria e com responsabilidade pela retenção sobre combustíveis
     */
    const TRIBUTACAO_MONOFASICA_PROPRIA_COM_RESPONSAVEL_RETENCAO_COMBUSTIVEIS = '15';

    /**
     * Com redução de base de cálculo
     */
    const COM_REDUCAO_BASE_CALCULO = '20';

    /**
     * Isenta ou não tributada e com cobrança do ICMS por substituição tributária
     */
    const ISENTA_NAO_TRIBUTADA_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '30';

    /**
     * Isenta
     */
    const ISENTA = '40';

    /**
     * Não tributada
     */
    const NAO_TRIBUTADA = '41';

    /**
     * Suspensão
     */
    const SUSPENSAO = '50';

    /**
     * Diferimento
     */
    const DIFERIMENTO = '51';

    /**
     * Tributação monofásica sobre combustíveis com recolhimento diferido
     */
    const TRIBUTACAO_MONOFASICA_COMBUSTIVEIS_RECOLHIMENTO_DIFERIDO = '53';

    /**
     * ICMS cobrado anteriormente por substituição tributária
     */
    const ICMS_COBRADO_ANTERIORMENTE_SUBSTITUICAO_TRIBUTARIA = '60';

    /**
     * Tributação monofásica sobre combustíveis cobrada anteriormente
     */
    const TRIBUTACAO_MONOFASICA_COMBUSTIVEIS_COBRADA_ANTERIORMENTE = '61';

    /**
     * Com redução de base de cálculo e cobrança do ICMS por substituição tributária
     */
    const COM_REDUCAO_BASE_CALCULO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '70';

    /**
     * Outros
     */
    const OUTROS = '90';

    /**
     * Tributada pelo Simples Nacional com permissão de crédito
     */
    const TRIBUTADA_SIMPLES_NACIONAL_PERMISSAO_CREDITO = '101';

    /**
     * Tributada pelo Simples Nacional sem permissão de crédito
     */
    const TRIBUTADA_SIMPLES_NACIONAL_SEM_PERMISSAO_CREDITO = '102';

    /**
     * Isenção do ICMS  no Simples Nacional para faixa de receita bruta
     */
    const ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA = '103';

    /**
     * Imune
     */
    const IMUNE = '300';

    /**
     * Não tributada pelo Simples Nacional
     */

    const NAO_TRIBUTADA_SIMPLES_NACIONAL = '400';

    /**
     * Tributada pelo Simples Nacional com permissão de crédito e com cobrança do ICMS por Substituição Tributária
     */
    const TRIBUTADA_SIMPLES_NACIONAL_PERMISSAO_CREDITO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '201';

    /**
     * Tributada pelo Simples Nacional sem permissão de crédito e com cobrança do ICMS por Substituição Tributária
     */
    const TRIBUTADA_SIMPLES_NACIONAL_SEM_PERMISSAO_CREDITO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '202';

    /**
     * Isenção do ICMS nos Simples Nacional para faixa de receita bruta e com cobrança do ICMS por Substituição Tributária
     */
    const ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '203';
    
    /**
     * ICMS cobrado anteriormente por substituição tributária (substituído) ou por antecipação
     */
    const ICMS_COBRADO_ANTERIORMENTE_SUBSTITUICAO_TRIBUTARIA_SUBSTITUIDO_OU_ANTICIPACAO = '500';

    /**
     * segundo codigo outros
     */
    const OUTROS_2 = '900';
    
   
    public function getDescricao($codigo): string 
    {
        switch ($codigo) {
            case self::TRIBUTADA_INTEGRALMENTE:
                return 'Tributada integralmente';
            case self::TRIBUTACAO_MONOFASICA_PROPRIA_COMBUSTIVEIS:
                return 'Tributação monofásica própria sobre combustíveis';
            case self::TRIBUTADA_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA:
                return 'Tributada e com cobrança do ICMS por substituição tributária';
            case self::TRIBUTACAO_MONOFASICA_PROPRIA_COM_RESPONSAVEL_RETENCAO_COMBUSTIVEIS:
                return 'Tributação monofásica própria e com responsabilidade pela retenção sobre combustíveis';
            case self::COM_REDUCAO_BASE_CALCULO:
                return 'Com redução de base de cálculo';
            case self::ISENTA_NAO_TRIBUTADA_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA:
                return 'Isenta ou não tributada e com cobrança do ICMS por substituição tributária';
            case self::ISENTA:
                return 'Isenta';
            case self::NAO_TRIBUTADA:
                return 'Não tributada';
            case self::SUSPENSAO:
                return 'Suspensão';
            case self::DIFERIMENTO:
                return 'Diferimento';
            case self::TRIBUTACAO_MONOFASICA_COMBUSTIVEIS_RECOLHIMENTO_DIFERIDO:
                return 'Tributação monofásica sobre combustíveis com recolhimento diferido';
            case self::ICMS_COBRADO_ANTERIORMENTE_SUBSTITUICAO_TRIBUTARIA:
                return 'ICMS cobrado anteriormente por substituição tributária';
            case self::TRIBUTACAO_MONOFASICA_COMBUSTIVEIS_COBRADA_ANTERIORMENTE:
                return 'Tributação monofásica sobre combustíveis cobrada anteriormente';
            case self::COM_REDUCAO_BASE_CALCULO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA:
                return 'Com redução de base de cálculo e cobrança do ICMS por substituição tributária';
            case self::OUTROS:
                return 'Outros';
            case self::TRIBUTADA_SIMPLES_NACIONAL_PERMISSAO_CREDITO:
                return 'Tributada pelo Simples Nacional com permissão de crédito';
            case self::TRIBUTADA_SIMPLES_NACIONAL_SEM_PERMISSAO_CREDITO:
                return 'Tributada pelo Simples Nacional sem permissão de crédito';
            case self::ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA:
                return 'Isenção do ICMS  no Simples Nacional para faixa de receita bruta';
            case self::IMUNE:
                return 'Imune';
            case self::NAO_TRIBUTADA_SIMPLES_NACIONAL:
                return 'Não tributada pelo Simples Nacional';
            case self::TRIBUTADA_SIMPLES_NACIONAL_PERMISSAO_CREDITO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA:
                return 'Tributada pelo Simples Nacional com permissão de crédito e com cobrança do ICMS por Substituição Tributária';
            case self::TRIBUTADA_SIMPLES_NACIONAL_SEM_PERMISSAO_CREDITO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA:
                return 'Tributada pelo Simples Nacional sem permissão de crédito e com cobrança do ICMS por Substituição Tributária';
            case self::ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA:
                return 'Isenção do ICMS nos Simples Nacional para faixa de receita bruta e com cobrança do ICMS por Substituição Tributária';
            case self::ICMS_COBRADO_ANTERIORMENTE_SUBSTITUICAO_TRIBUTARIA_SUBSTITUIDO_OU_ANTICIPACAO:
                return 'ICMS cobrado anteriormente por substituição tributária (substituído) ou por antecipação';
            case self::OUTROS_2:
                return 'Outros';
            default:
                return '';

        }

    }

}