<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>V ou F</p><hr>";
var_dump(!true);
echo '<br>';
var_dump(!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';
echo '<br>';

var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and true);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || true);
echo '<br>';
echo '<br>';

var_dump(true or true);
echo '<br>';
var_dump(true or false);
echo '<br>';
var_dump(false or true);
echo '<br>';
var_dump(false or true);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor true);
echo '<br>';
echo '<br>';

var_dump(true != true);
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != true);
echo '<br>';

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

if ($idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar';
} elseif ($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar';
} else {
    echo 'Vai ter que trabalhar, vagabundo!';
}

?>