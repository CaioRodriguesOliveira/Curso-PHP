<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="post">
    <label for="linhas">Linhas</label>
    <input type="number" name="linhas" id="linhas" value="4">
    <label for="colunas">Colunas</label>
    <input type="number" name="colunas" id="colunas" value="10">
    <button>Gerar Tabela</button>
</form>
<table>
    <?php
    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);
    $num = 1;
    $style = 'background-color: lightblue;';
    for ($i = 0; $i < $linhas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colunas; $j++) {
            echo "<td style='{$style}'>$num</td>";
            $num++;
        }
        echo "</tr>";
    }

    print_r($_POST['linhas']);
    ?>

</table>

<style>
    form * {
        font-size: 1.8rem;
    }

    form > * {
        margin-bottom: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin-top: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>
