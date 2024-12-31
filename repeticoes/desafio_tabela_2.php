<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="post">
    <div class="entrada">
        <label for="linhas"> Linhas:</label><br>
        <input type="number" value=<?= isset($_POST['linhas']) ? $_POST['linhas'] : ''; ?> id="linhas" name="linhas">
        
    </div>
    <div class="entrada">
    <label for="colunas">Colunas:</label><br>
    <input type="number" value=<?= isset($_POST['colunas']) ? $_POST['colunas'] : ''; ?> id="colunas" name="colunas">
    </div>
    <button>Executar</button>
</form>

<?php
$linhas = isset($_POST['linhas']) ? $_POST['linhas'] : '';
$colunas = isset($_POST['colunas']) ? $_POST['colunas'] : '';

$numeros = 1;
echo "<table>";
for($i = 0; $i < $linhas; $i++){
    echo "<tr>";
    for($j = 0; $j < $colunas; $j++){
        echo "<td>$numeros</td>";
        $numeros++;
    }
    echo "</tr>";
}
echo "</table>";
?>

<style>

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin:20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }

    .entrada {
        display: inline-block;
    }
</style>