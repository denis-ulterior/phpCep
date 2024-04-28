<?php
declare(strict_types=1);
namespace Ulteriorti\Digitalcep;
/*
*Realiza busca do CEP no VIACEP
*/
class Search{
    private string $url = "https://viacep.com.br/ws/";
    private int $zipCodeInt;
    public function getAddressFromZipCode(string $zipCode):array{
        $zipCode = preg_replace('/[^0-9]/im','',$zipCode);
        $zipCodeInt = intval($zipCode);
        $zipCodeInt = filter_var($zipCode,FILTER_VALIDATE_INT);
        $get = file_get_contents($this->url.$zipCodeInt."/json");
        //print_r($get);
        return (array) json_decode($get);

    }
}