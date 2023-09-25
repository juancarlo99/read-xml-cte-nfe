<?php

namespace Xml\Util\Models\Nfe\Enums;

class OperacaoDePresencaDoComprador
{
    const NAO_SE_APLICA = 0;
    const OPERACAO_PRESENCIAL = 1;
    const OPERACAO_NAO_PRESENCIAL_INTERNET = 2;
    const OPERACAO_NAO_PRESENCIAL_TELEATENDIMENTO = 3;
    const NFE_ENTREGA_DOMICILIO = 4;
    const OPERACAO_PRESENCIAL_FORA_ESTABELECIMENTO = 5;
    const OPERACAO_NAO_PRESENCIAL_OUTROS = 9;
    
}