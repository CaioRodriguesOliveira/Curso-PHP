<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "Bem vindo, $nome $sobrenome! <br>";

}

echo saudacao();
echo saudacao(NULL, NULL);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Pizza');
anotarPedido('Hamburguer', 'Refrigerante');
anotarPedido('Salada', '');