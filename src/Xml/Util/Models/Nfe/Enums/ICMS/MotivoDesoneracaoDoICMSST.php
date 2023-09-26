<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;

class MotivoDesoneracaoDoICMSST
{
    /**
     * Uso na agropecuária
     */
    const USO_NA_AGROPECUARIA = 3;

    /**
     * Outros
     */
    const OUTROS = 9;

    /**
     * Órgão de fomento e desenvolvimento agropecuário
     */
    const ORGAO_DE_FOMENTO_E_DESENVOLVIMENTO_AGROPECUARIO = 12;
   

    public function getDescricao(int $codigo): string
    {
        switch ($codigo) {
            case self::USO_NA_AGROPECUARIA:
                return 'Uso na agropecuária';
                break;
            case self::OUTROS:
                return 'Outros';
                break;
            case self::ORGAO_DE_FOMENTO_E_DESENVOLVIMENTO_AGROPECUARIO:
                return 'Órgão de fomento e desenvolvimento agropecuário';
                break;
            default:
                return '';
                break;
        }
    }

}