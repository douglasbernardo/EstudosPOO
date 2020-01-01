<?php 

require "classes/produtos.php";
require "models/produtos.php";


use models\Produto as ProductClass;

use classes\Produto as ProductModel;

$produto = new ProductClass;
$produto->mostrarDetalhes();

echo "<br>";

$produto = new ProductModel();
$produto->mostrarDetalhes();
