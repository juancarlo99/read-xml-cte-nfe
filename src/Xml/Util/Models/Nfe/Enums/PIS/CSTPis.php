<?php

namespace Xml\Util\Models\Nfe\Enums\PIS;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class CSTPis
{

    use EnumTraits;

    // 49 - Outras Operações de Saída; 
    // 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno; 
    // 51 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno ;
    // 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação; 
    // 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno; 
    // 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação ;
    // 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação; 
    // 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação;
    // 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno; 
    // 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno; 
    // 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação; 
    // 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno; 
    // 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação; 
    // 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação; 
    // 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação; 
    //  67 - Crédito Presumido - Outras Operações; 
    // 70 - Operação de Aquisição sem Direito a Crédito; 
    // 71 - Operação de Aquisição com Isenção; 
    // 72 - Operação de Aquisição com Suspensão; 
    // 73 - Operação de Aquisição a Alíquota Zero; 
    // 74 - Operação de Aquisição sem Incidência da Contribuição; 
    // 75 - Operação de Aquisição por Substituição Tributária;
    // 98 - Outras Operações de Entrada


    /**
     * Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);
     */
    const OPERACAO_TRIBUTAVEL_BASE_CALCULO_VALOR_OPERACAO_ALIQUOTA_NORMAL = '01';

    /**
     * Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada)
     */
    const OPERACAO_TRIBUTAVEL_BASE_CALCULO_VALOR_OPERACAO_ALIQUOTA_DIFERENCIADA = '02';

    /**
     *  Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto
     */
    const OPERACAO_TRIBUTAVEL_BASE_CALCULO_QUANTIDADE_VENDIDA_ALIQUOTA_UNIDADE_PRODUTO = '03';

    /**
     * Operação Tributável - Tributação Monofásica - (Alíquota Zero)
     */
    const OPERACAO_TRIBUTAVEL_TRIBUTACAO_MONOFASICA_ALIQUOTA_ZERO = '04';

     /**
     * Operação Tributável (ST);
     */
    const OPERACAO_TRIBUTAVEL_ST = '05';

    /**
     *  Operação Tributável - Alíquota Zero
     */
    const OPERACAO_TRIBUTAVEL_ALIQUOTA_ZERO = '06';

    /**
     * Operação Isenta da contribuição
     */
    const OPERACAO_ISENTA_CONTRIBUICAO = '07';

    /**
     * Operação Sem Incidência da contribuição
     */
    const OPERACAO_SEM_INCIDENCIA_CONTRIBUICAO = '08';

    /**
     * Operação com suspensão da contribuição
     */
    const OPERACAO_COM_SUSPENSAO_CONTRIBUICAO = '09';

    /**
     * Outras Operações de Saída
     */
    const OUTRA_OPERACOES_SAIDA = '49';

    /**
     * Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno;
     */
    const OPERACAO_DIREITO_CREDITO_VINCULADA_EXCLUSIVAMENTE_RECEITA_TRIBUTADA_MERCADO_INTERNO = '50';

    /**
     * Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno ;
     */
    const OPERACAO_DIREITO_CREDITO_VINCULADA_EXCLUSIVAMENTE_RECEITA_NAO_TRIBUTADA_MERCADO_INTERNO = '51';

    /**
     * Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação;
     */
    const OPERACAO_DIREITO_CREDITO_VINCULADA_EXCLUSIVAMENTE_RECEITA_EXPORTACAO = '52';

    /**
     * Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno;
     */
    const OPERACAO_DIREITO_CREDITO_VINCULADA_RECEITAS_TRIBUTADAS_NAO_TRIBUTADAS_MERCADO_INTERNO = '53';

    /**
     * Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação;
     */
    const OPERACAO_DIREITO_CREDITO_VINCULADA_RECEITAS_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO = '54';

    /**
     * Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação;
     */
    const OPERACAO_DIREITO_CREDITO_VINCULADA_RECEITAS_NAO_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO = '55';

    /**
     * Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação;
     */
    const OPERACAO_DIREITO_CREDITO_VINCULADA_RECEITAS_TRIBUTADAS_NAO_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO = '56';

    /**
     * Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno;
     */
    const CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_EXCLUSIVAMENTE_RECEITA_TRIBUTADA_MERCADO_INTERNO = '60';

    /**
     * Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno;
     */
    const CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_EXCLUSIVAMENTE_RECEITA_NAO_TRIBUTADA_MERCADO_INTERNO = '61';

    /**
     * Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação;
     */
    const CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_EXCLUSIVAMENTE_RECEITA_EXPORTACAO = '62';

    /**
     * Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno;
     */
    const CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_RECEITAS_TRIBUTADAS_NAO_TRIBUTADAS_MERCADO_INTERNO = '63';

    /**
     * Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação;
     */
    const CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_RECEITAS_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO = '64';

    /**
     * Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação;
     */
    const CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_RECEITAS_NAO_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO = '65';

    /**
     * Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação;
     */
    const CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_RECEITAS_TRIBUTADAS_NAO_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO = '66';

    /**
     * Crédito Presumido - Outras Operações;
     */
    const CREDITO_PRESUMIDO_OUTRAS_OPERACOES = '67';

    /**
     * Operação de Aquisição sem Direito a Crédito;
     */
    const OPERACAO_AQUISICAO_SEM_DIREITO_CREDITO = '70';

    /**
     * Operação de Aquisição com Isenção;
     */
    const OPERACAO_AQUISICAO_COM_ISENCAO = '71';

    /**
     * Operação de Aquisição com Suspensão;
     */
    const OPERACAO_AQUISICAO_COM_SUSPENSAO = '72';

    /**
     * Operação de Aquisição a Alíquota Zero;
     */
    const OPERACAO_AQUISICAO_ALIQUOTA_ZERO = '73';

    /**
     * Operação de Aquisição sem Incidência da Contribuição;
     */
    const OPERACAO_AQUISICAO_SEM_INCIDENCIA_CONTRIBUICAO = '74';

    /**
     * Operação de Aquisição por Substituição Tributária;
     */
    const OPERACAO_AQUISICAO_POR_SUBSTITUICAO_TRIBUTARIA = '75';

    /**
     * Outras Operações de Entrada;
     */
    const OUTRAS_OPERACOES_ENTRADA = '98';


    /**
     * Outras Operações
     */
    const OUTRAS_OPERACOES = '99';

     const DESCRICOES = [
        self::OPERACAO_TRIBUTAVEL_BASE_CALCULO_VALOR_OPERACAO_ALIQUOTA_NORMAL => 'Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo)',
        self::OPERACAO_TRIBUTAVEL_BASE_CALCULO_VALOR_OPERACAO_ALIQUOTA_DIFERENCIADA => 'Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada)',
        self::OPERACAO_TRIBUTAVEL_BASE_CALCULO_QUANTIDADE_VENDIDA_ALIQUOTA_UNIDADE_PRODUTO => 'Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto',
        self::OPERACAO_TRIBUTAVEL_TRIBUTACAO_MONOFASICA_ALIQUOTA_ZERO => 'Operação Tributável - Tributação Monofásica - (Alíquota Zero)',
        self::OPERACAO_TRIBUTAVEL_ST => 'Operação Tributável (ST)',
        self::OPERACAO_TRIBUTAVEL_ALIQUOTA_ZERO => 'Operação Tributável - Alíquota Zero',
        self::OPERACAO_ISENTA_CONTRIBUICAO => 'Operação Isenta da contribuição',
        self::OPERACAO_SEM_INCIDENCIA_CONTRIBUICAO => 'Operação Sem Incidência da contribuição',
        self::OPERACAO_COM_SUSPENSAO_CONTRIBUICAO => 'Operação com suspensão da contribuição',
        self::OUTRA_OPERACOES_SAIDA => 'Outras Operações de Saída',
        self::OPERACAO_DIREITO_CREDITO_VINCULADA_EXCLUSIVAMENTE_RECEITA_TRIBUTADA_MERCADO_INTERNO => 'Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno',
        self::OPERACAO_DIREITO_CREDITO_VINCULADA_EXCLUSIVAMENTE_RECEITA_NAO_TRIBUTADA_MERCADO_INTERNO => 'Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno',
        self::OPERACAO_DIREITO_CREDITO_VINCULADA_EXCLUSIVAMENTE_RECEITA_EXPORTACAO => 'Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação',
        self::OPERACAO_DIREITO_CREDITO_VINCULADA_RECEITAS_TRIBUTADAS_NAO_TRIBUTADAS_MERCADO_INTERNO => 'Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno',
        self::OPERACAO_DIREITO_CREDITO_VINCULADA_RECEITAS_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO => 'Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação',
        self::OPERACAO_DIREITO_CREDITO_VINCULADA_RECEITAS_NAO_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO => 'Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação',
        self::OPERACAO_DIREITO_CREDITO_VINCULADA_RECEITAS_TRIBUTADAS_NAO_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO => 'Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação',
        self::CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_EXCLUSIVAMENTE_RECEITA_TRIBUTADA_MERCADO_INTERNO => 'Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno',
        self::CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_EXCLUSIVAMENTE_RECEITA_NAO_TRIBUTADA_MERCADO_INTERNO => 'Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno',
        self::CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_EXCLUSIVAMENTE_RECEITA_EXPORTACAO => 'Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação',
        self::CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_RECEITAS_TRIBUTADAS_NAO_TRIBUTADAS_MERCADO_INTERNO => 'Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno',
        self::CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_RECEITAS_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO => 'Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação',
        self::CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_RECEITAS_NAO_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO => 'Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação',
        self::CREDITO_PRESUMIDO_OPERACAO_AQUISICAO_VINCULADA_RECEITAS_TRIBUTADAS_NAO_TRIBUTADAS_MERCADO_INTERNO_EXPORTACAO => 'Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação',
        self::CREDITO_PRESUMIDO_OUTRAS_OPERACOES => 'Crédito Presumido - Outras Operações',
        self::OPERACAO_AQUISICAO_SEM_DIREITO_CREDITO => 'Operação de Aquisição sem Direito a Crédito',
        self::OPERACAO_AQUISICAO_COM_ISENCAO => 'Operação de Aquisição com Isenção',
        self::OPERACAO_AQUISICAO_COM_SUSPENSAO => 'Operação de Aquisição com Suspensão',
        self::OPERACAO_AQUISICAO_ALIQUOTA_ZERO => 'Operação de Aquisição a Alíquota Zero',
        self::OPERACAO_AQUISICAO_SEM_INCIDENCIA_CONTRIBUICAO => 'Operação de Aquisição sem Incidência da Contribuição',
        self::OPERACAO_AQUISICAO_POR_SUBSTITUICAO_TRIBUTARIA => 'Operação de Aquisição por Substituição Tributária',
        self::OUTRAS_OPERACOES_ENTRADA => 'Outras Operações de Entrada',
        self::OUTRAS_OPERACOES => 'Outras Operações',
    ];

}