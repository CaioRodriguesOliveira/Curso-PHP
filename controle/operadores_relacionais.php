<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // Igual
echo '<br>';
var_dump(1 > 1); // Maior
echo '<br>';
var_dump(1 < 1); // Menor
echo '<br>';
var_dump(1 >= 1); // Maior ou Igual
echo '<br>';
var_dump(1 <= 1); // Menor ou Igual
echo '<br>';
var_dump(1 != 1); // Diferente (normalmente usado no SQL)
echo '<br>';
var_dump(1 <> 1); // Diferente
echo '<br>';

var_dump(111 == '111'); // == Compara somente os valores
echo '<br>';
var_dump(111 === '111'); // === Compara o tipo, sendo 111 um int e '111' uma string, sendo assim é false.
echo '<br>';
var_dump(111 != '111');
echo '<br>';
var_dump(111 !== '111');
echo '<br>';

echo '<p>Relacionais no If/Else</p><hr>';
$idade = 17;
if($idade < 18) {
    echo "Menor de idade, possui $idade anos!<br>";
} else if($idade < 65){
    echo "Adulto, possui $idade anos!<br>";
} else if ($idade >= 65) {
    echo "Idoso, possui $idade anos!<br>";
} else {
    echo "Menor de idade, possui $idade anos!";
}
echo '<p>Spaceship</p><hr>';
var_dump(5 <=> 3); // se o valor da direita for > que esquerda  res = int(1)
echo '<br>';
var_dump(50 <=> 50); // se os valores forem iguais, res = int(0)
echo '<br>';
var_dump(49 <=> 50); // se o valor da esquerda for > que direita res = int(-1)
echo '<br>';
echo '<p>Valores pode ser V ou F</p><hr>';
var_dump(!!5);
echo '<br>';
var_dump(!!0);
echo '<br>';
var_dump(!!"");
echo '<br>';
var_dump(!! " ");
echo '<br>';
?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr{
        margin-top: 0px;
    }
</style>