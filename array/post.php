<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" id=""><br>
    <input type="text" name="sobrenome" id=""><br>
    <select name="estado" id="">
        <option value="Minas Gerais">Minas Gerais</option>
        <option value="São Paulo">São Paulo</option>
        <option value="Rio de Janeiro">Rio de Janeiro</option>
        <option value="Bahia">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<?php 

echo "<pre>";print_r($_POST);