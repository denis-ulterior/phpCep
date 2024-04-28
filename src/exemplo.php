<?php
require_once "vendor/autoload.php";
use \Ulteriorti\Digitalcep\Search;
$busca = new Search;
$resultado = $busca->getAddressFromZipCode('12061302');
print_r($resultado);