<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromo('arara') . '<br>';
echo palindromo('abccba') . '<br>';
echo palindromo('bola') . '<br>';

function palindromo2($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo2('arara') . '<br>';
echo palindromo2('abccba') . '<br>';
echo palindromo2('bola') . '<br>';