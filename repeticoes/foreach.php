<div class="titulo">Foreach</div>

<?php

$array = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

foreach($array as $valor) {
    echo "$valor <br>";
}

echo "<hr>";

foreach ($array as $indice => $valor) {
    echo "$valor <br>";
}

echo "<hr>";    

$matri = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach($matri as $linha) {
    foreach($linha as $letra) {
        echo "$letra ";
    }
    echo "<br>";
}

echo "<hr>";

$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}