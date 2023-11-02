<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu Também");  //com var_dump é calculado o tamanho da string, no caso espaços e acentos tambem contam.
echo '<br>';

// concatenação é usado com '.' em PHP
echo "Nós também" . ' somos ' . 1+3;
echo '<br>';
echo ("Nós também" . ' somos ' . 1+3);
echo '<br>', "Também aceito", " virgulas"; // a virgula nao é coniderado na concatenação

echo '<br>';
echo "'Teste'" . ' "Teste"' . ' \'Teste\'' . " \"Teste\"" . " \\";
print("<br>Também existe a funcão print");
print "<br>Também existe a funcão print";

// algumas funcões

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras'); // Coloca todas a letras iniciais em uppercase
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . strlen("Eu também"); // o acento tambem conta como lenght
echo '<br>' . mb_strlen("Eu também" , "utf-8"); // aqui conta sem o acento // É possivel adicionar $encoding, no caso colocar o utf8
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // nesse caso o '7' seria a sétima casa, sendo 'P' e '6' seria a quantidade de casas que a string vai ler, "parte"
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); // procura por 'isso' e troca por 'aquilo'
