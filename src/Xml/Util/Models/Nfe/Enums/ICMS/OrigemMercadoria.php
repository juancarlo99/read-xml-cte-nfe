<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;

class OrigemMercadoria
{

    /**
     * Nacional - Exceto as indicadas nos códigos 3,4,5 e 8
     */
    const NACIONAL = 0;

    /**
     * Estrangeira - Importação Direta
     */
    const ESTRANGEIRA_IMPORTACAO_DIRETA = 1;

    /**
     * Estrangeira - Adq. no mercado interno
     */
    const ESTRANGEIRA_ADQ_MERCADO_INTERNO = 2;

    /**
     * Nacional - com Conteúdo de Importação superior a 40% e inferior ou igual a 70%
     */
    const NACIONAL_CONTEUDO_IMPORTACAO_40_70 = 3;

    /**
     * Nacional - cuja produção tenha sido feita em conformidade
     */
    const NACIONAL_PRODUCAO_CONFORMIDADE = 4;
    
    /**
     * Nacional - com Conteúdo de Importação inferior ou igual a 40%
     */ 
    const NACIONAL_CONTEUDO_IMPORTACAO_40 = 5;

    /**
     * Estrangeira - Imp. direta, sem similar nacional, na lista da CAMEX
     */
    const ESTRANGEIRA_IMPORTACAO_DIRETA_SEM_SIMILAR_NACIONAL = 6;

    /**
     * Estrangeira - Adq. interno, sem similar nacional, na lista da CAMEX
     */
    const ESTRANGEIRA_ADQ_INTERNO_SEM_SIMILAR_NACIONAL = 7;

    /**
     * Nacional - Mercadoria ou bem com Conteúdo de Importação superior a 70%
     */
    const NACIONAL_CONTEUDO_IMPORTACAO_70 = 8;

    public function getDescricao($codigo): string
    {
        switch ($codigo) {
            case self::NACIONAL:
                return 'Nacional - Exceto as indicadas nos códigos 3,4,5 e 8';
            case self::ESTRANGEIRA_IMPORTACAO_DIRETA:
                return 'Estrangeira - Importação Direta';
            case self::ESTRANGEIRA_ADQ_MERCADO_INTERNO:
                return 'Estrangeira - Adq. no mercado interno';
            case self::NACIONAL_CONTEUDO_IMPORTACAO_40_70:
                return 'Nacional - com Conteúdo de Importação superior a 40% e inferior ou igual a 70%';
            case self::NACIONAL_PRODUCAO_CONFORMIDADE:
                return 'Nacional - cuja produção tenha sido feita em conformidade';
            case self::NACIONAL_CONTEUDO_IMPORTACAO_40:
                return 'Nacional - com Conteúdo de Importação inferior ou igual a 40%';
            case self::ESTRANGEIRA_IMPORTACAO_DIRETA_SEM_SIMILAR_NACIONAL:
                return 'Estrangeira - Imp. direta, sem similar nacional, na lista da CAMEX';
            case self::ESTRANGEIRA_ADQ_INTERNO_SEM_SIMILAR_NACIONAL:
                return 'Estrangeira - Adq. interno, sem similar nacional, na lista da CAMEX';
            case self::NACIONAL_CONTEUDO_IMPORTACAO_70:
                return 'Nacional - Mercadoria ou bem com Conteúdo de Importação superior a 70%';
            default:
                return '';
        }
    }
}