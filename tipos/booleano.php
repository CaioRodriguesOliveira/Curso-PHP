<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(TRUE);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversões
echo '<p>Regras</p>';
echo '<br>' . var_dump((bool) 0); //apenas zero ou string vazia é false dos numeros
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00000001);
echo '<br>' . var_dump((bool) ""); //false
echo '<br>' . var_dump((bool) "0"); //false
echo '<br>' . var_dump((bool) " "); //todo o resto é true
echo '<br>' . var_dump((bool) "00"); //true
echo '<br>' . var_dump((bool) "false"); //true

echo '<br>' . var_dump(!!"false"); //true