<div class="titulo">Desafio For</div>

<!--
    #
    ##
    ###
    ####
    #####
-->
<?php  

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "#";
    }
    echo "<br>";
}

echo "<hr>";

for ($i = '#'; $i !== '######'; $i .= '#') {
    echo "$i <br>";
}
