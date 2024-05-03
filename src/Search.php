<?php

declare(strict_types=1);

namespace Ulteriorti\Digitalcep;

use Exception;

/*
*Realiza busca do CEP no VIACEP
*/
class Search
{
    private const URL = 'https://viacep.com.br/ws/';
    private int $zipCodeInt;
    public function getAddressFromZipCode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
        $zipCodeInt = intval($zipCode);
        $zipCodeInt = filter_var($zipCode, FILTER_VALIDATE_INT);
        $retorno = $this->obterDados($zipCodeInt);
        return(array) json_decode($retorno);
    }
    private function obterDados(int $zipCodeInt): string
    {
        try {
            $get = @file_get_contents(self::URL . $zipCodeInt . "/json");
            if ($get === false) {
                throw new Exception("Falha ao obter dados com a entrada informada");
            }
        } catch (Exception $e) {
            return ("{" . '"' . $zipCodeInt . '" :' . '"' . $e->getMessage() . '"' . "}");
        }
        return $get;
    }
}
