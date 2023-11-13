<div class="titulo">If Else</div>

<?php
//{
//    echo "Linha 1";
//    echo "Linha 2";
//}
//if(false)
//{

//}
//    echo "Serei impresso?";
//    echo "Serei impresso novamente?";

$numA = 2;
$numB = 5;

if (true) {
    echo "Serei impresso";
    echo '<br>';
}

if($numA < $numB) {
    echo "Verdadeiro<br>";
    echo "Verdadeiro<br>";
} else {
    echo "Falso<br>";
    echo "Falso<br>";
}

if ($numA > $numB) {
    echo 'Verdadeiro<br>';
} else if($numA < $numB) {
    echo 'Falso<br>';
}

echo "FIM";
    