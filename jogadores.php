<?php

require "classes/jogador.php";
require "models/basquete.php";
require "volei/jogadorv.php";


use classes\Jogador;
use models\basquete;
use volei\volei;

echo "<h2>Jogador de Futebol</h2>";
$jogador = New Jogador("Van dijk","Zagueiro","80.000.000");
$jogador->Apresentarjogador();
$jogador->MostrarCompra();
echo "<hr>";
echo "<h2>Jogador de Basquete</h2>";
$basquete = New Jogador("LeBron James","Ala","30.000.000");
$basquete->Apresentarjogador();
$basquete->MostrarCompra();
echo "<hr>";
echo "<h2>Jogador de Volei</h2>";
$volei = New Jogador("Wilfredo Leon","ponteiro","90.000.000");
$volei->Apresentarjogador();
$volei->MostrarCompra();