<?php

require_once "vendor/autoload.php";

use App\Model;

$produto = New produto();

$produto->setNome("Iphone 7");

$produto->setDescricao("ios 13","256gb");

$produtodao = New produtodao();

var_dump($produto);