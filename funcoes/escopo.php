<div class="titulo">Escopo</div>

<?php

function ImprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

ImprimirMensagens();

$variavel = 1;

function TrocarValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";

TrocarValor();

echo "Depois: $variavel <br>";

function TrocarValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";

TrocarValorDeVerdade();

echo "Depois: $variavel <br>";

var_dump(TrocarValorDeVerdade());