<div class="titulo">Funções Anônimas</div>

<?php

$soma = function($a, $b) {
    return $a + $b;
};

echo $soma(2, 3) . '<br>';

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar(2, 3, '+', $soma);

$multi = function($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multi);

function divisao($a, $b) {
    return $a / $b;
};
