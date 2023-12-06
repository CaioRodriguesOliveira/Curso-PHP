<div class="titulo">Operador Ternário</div>

<?php

$idade = 70;
$status;

if ($idade >= 18) {
    $status = 'Maior de Idade';
} else {
    $status = 'Menor de Idade';
}

echo "$status";
$idade = 17;

$status = $idade >= 18 ? /*TRUE*/ 'Maior de idade' : /*False*/ 'Menor de Idade'; // $var = xx define a varivavel e ?(ternário)  trata os valores como se fosse verdadeiro ou falso.
echo '<br>';
echo "$status";

$status = $idade >= 18 ? $idade = 65 ? 'Aposentado' : 'Maior de Idade' : 'Menor de Idade';

echo '<br>';
echo "$status";