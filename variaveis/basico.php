<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;

echo $numeroA;
echo '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;

EcHo $somaDosNumeros;
echo '<br>';
//EcHo $Soma; variavéis em php são case sensitivy
echo isset($somaDosNumeros);
unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = "Agora sou uma String!";
echo '<br>'. $variavel;
echo '<br>';
var_dump($variavel);

// Nomes de varíavel

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]); // variável pre definida