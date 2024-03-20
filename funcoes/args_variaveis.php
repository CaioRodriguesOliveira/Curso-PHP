<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(14,15 , 6, 7, 8, 9) . '<br>';

function somaCompleta(...$numeros) {
    $total = 0;
    foreach(func_get_args() as $num) {
        $total += $num;
    }
    return $total;
}

echo somaCompleta(1, 2, 3, 4, 5, 6, 7, 8, 9) . '<br>';

$array = [6, 7, 8];

echo somaCompleta(...$array) . '<br>';

function membros($titular, ...$depend) {
    echo "Titular: $titular <br>";
    if($depend) {
        foreach($depend as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

membros("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo '<br>';

membros("Roberto", "Junior");