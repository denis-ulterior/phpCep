<?php

declare(strict_types=1);

namespace Ulteriorti\Digitalcep\DataSources;

use Exception;

class ViaCep
{
    private const URL = 'https://viacep.com.br/ws/';

    public function obterDados(int $zipCodeInt): string
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
