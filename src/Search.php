<?php

declare(strict_types=1);

namespace Ulteriorti\Digitalcep;

use Ulteriorti\Digitalcep\DataSources\ViaCep;

/*
*Realiza busca do CEP no VIACEP
*/
class Search
{
    private int $zipCodeInt;
    public function getAddressFromZipCode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
        $zipCodeInt = intval($zipCode);
        $zipCodeInt = filter_var($zipCode, FILTER_VALIDATE_INT);
        $fonte = new ViaCep();
        $retorno = $fonte->obterDados($zipCodeInt);
        return(array) json_decode($retorno);
    }
}
