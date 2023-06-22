<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5,  '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
var_dump(7 / 4);
echo '<br>';
echo intdiv(7, 4), '<br>'; // nesse caso essa função pega somente a parte inteira da divisão
echo round(7 / 4), '<br>'; // serve para arredondar valores
echo 7 % 4, '<br>';
echo 7 % 2, '<br>'; // 2 nesse caso é usado para saber se o resto da divisao e par ou impar
echo 8 % 2, '<br>';
#echo 7 / 0, '<br>'; // infinito!
#echo intdiv(7, 0); #erro!
echo 4 ** 2, '<br>';

// Precedência de operadores:
//( ) => ** => / => * % => + -

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';