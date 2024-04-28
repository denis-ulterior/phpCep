<?php
require_once "vendor/autoload.php";
use \Ulteriorti\Digitalcep\Search;
$busca = new Search;
$resultado = $busca->getAddressFromZipCode("12061000");
print_r($resultado);