<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km"> Milha > KM</option>
        <option value="metro-km">Metros > KM</option>
        <option value="km-metro">KM > Metros</option>
        <option value="c-f">Celsius > Fahrenheit</option>
        <option value="f-c">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size:1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_F_C = 1.8;

$param = $_POST['param'] ?? 0;

switch ($_POST['conversao']) {

    case
        'km-milha':
        $distancia =  $param * FATOR_KM_MILHA;
        $mensagem = "$param KM = $distancia Milhas";
        break;
    case
        'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia KM";
        break;
    case
        'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia KM";
        break;
    case
        'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param KM = $distancia Metros";
        break;
    case 
        'c-f':
        $graus = $param * FATOR_F_C + 32;
        $mensagem = "$param Celsius = $graus Fahrenheit";
        break;
    case
        'f-c':
        $graus = ($param - 32 ) / FATOR_F_C;
        $mensagem = "$param Fahrenheit = $graus Celsius";
        break; 
    }
echo '<br>';
echo $mensagem;