<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;

class MotivoDesoneracaoDoICMS
{
    
    /**
     * Táxi
     */
    const TAXI = 1;

    /**
     * Deficiente Físico
     */
    const DEFICIENTE_FISICO = 2;

    /**
     * Produtor Agropecuário
     */

    const PRODUTOR_AGROPECUARIO = 3;

    /**
     * Frotista/Locadora
     */
    const FROTISTA_LOCADORA = 4;

    /**
     * Diplomático/Consular
     */
    const DIPLOMATICO_CONSULAR = 5;

    /**
     * Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações)
     */
    const UTILITARIOS_MOTOCICLETAS_AMAZONIA_OCIDENTAL = 6;

    /**
     * SUFRAMA
     */
    const SUFRAMA = 7;

    /**
     * Venda a Órgãos públicos (NT2011/004)
     */
    const VENDA_ORGAOS_PUBLICOS = 8;

    /**
     * outros (NT2011/004)
     */
    const OUTROS = 9;
    
    /**
     * Deficiente Condutor (Convênio ICMS 38/12)
     */
    const DEFICIENTE_CONDUTOR = 10;

    /**
     * Deficiente Não Condutor (Convênio ICMS 38/12)
     */
    const DEFICIENTE_NAO_CONDUTOR = 11;

    /**
     * Olimpíadas Rio 2016
     */
    const OLIMPIADAS_RIO_2016 = 16;



   

    public function getDescricao(int $codigo): string
    {
        switch ($codigo) {
            case self::TAXI:
                return 'Táxi';
            case self::DEFICIENTE_FISICO:
                return 'Deficiente Físico';
            case self::PRODUTOR_AGROPECUARIO:
                return 'Produtor Agropecuário';
            case self::FROTISTA_LOCADORA:
                return 'Frotista/Locadora';
            case self::DIPLOMATICO_CONSULAR:
                return 'Diplomático/Consular';
            case self::UTILITARIOS_MOTOCICLETAS_AMAZONIA_OCIDENTAL:
                return 'Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações)';
            case self::SUFRAMA:
                return 'SUFRAMA';
            case self::VENDA_ORGAOS_PUBLICOS:
                return 'Venda a Órgãos públicos (NT2011/004)';
            case self::OUTROS:
                return 'outros (NT2011/004)';
            case self::DEFICIENTE_CONDUTOR:
                return 'Deficiente Condutor (Convênio ICMS 38/12)';
            case self::DEFICIENTE_NAO_CONDUTOR:
                return 'Deficiente Não Condutor (Convênio ICMS 38/12)';
            case self::OLIMPIADAS_RIO_2016:
                return 'Olimpíadas Rio 2016';
            default:
                return '';
            
        }
    }

}