<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$randNome = array_rand($nomes);

echo "<h1><center>{$nomes[$randNome]}</center></h1>";