<div class="titulo">Mapa</div>

<?php
$dados = array(
    "Idade" => 25,
    "Cor" => "Verde",
    "Peso" => 49.8
);

print_r($dados);

//var_dump($dados[0]);
echo '<br>' . $dados["Idade"];
echo '<br>' . $dados["Cor"];
echo '<br>' . $dados["Peso"];
//echo '<br>' . $dados["Outra_informacao"];

$lista = array (
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

print_r($lista);

$lista[] = "i";

echo '<br>';

print_r($lista);