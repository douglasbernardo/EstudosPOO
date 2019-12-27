<?php 

require "classes/produtos.php";
require "models/produtos.php";


use models\Produto;

use classes\Produto as ProductModel;

$produto = new Produto();
$produto->mostrarDetalhes();

echo "<br>";

$produto = new ProductModel();
$produto->mostrarDetalhes();
