<?php
declare(strict_types=1);
namespace Ulteriorti\Digitalcep;

/*
*Realiza busca do CEP no VIACEP
*/
class Search{
    private const URL = 'https://viacep.com.br/ws/';
    private int $zipCodeInt;
    public function getAddressFromZipCode(string $zipCode):array{
        $zipCode = preg_replace('/[^0-9]/im','',$zipCode);
        $zipCodeInt = intval($zipCode);
        $zipCodeInt = filter_var($zipCode,FILTER_VALIDATE_INT);
        $get = file_get_contents(self::URL.$zipCodeInt."/json");
        return (array) json_decode($get);

    }
}