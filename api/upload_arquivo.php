<div class="titulo">Upload de Arquivo</div>

<?php

print_r($_FILES);
if($_FILES && $_FILES['arquivo']){
    $pastaUpload = '/Users/Verticais/Documents/Testando/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)){
        echo "<p class='success'>Arquivo enviado com sucesso: $nomeArquivo</p>";
    } else {
        echo "<p class='error'>Erro ao enviar o arquivo.</p>";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>