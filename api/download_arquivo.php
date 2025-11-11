<div class="titulo">Download de Arquivo</div>

<?php
session_start();

$arquivo = $_SESSION['arquivo'] ?? [];

$pastaUpload = __DIR__ . '/../files/';

$nomeArquivo = $_FILES['arquivo']['name'] ?? '';

$arquivo = $pastaUpload . $nomeArquivo;

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo)) {
    $_SESSION['arquivo'] = $nomeArquivo;
    echo "<p class='success'>Arquivo enviado com sucesso: $nomeArquivo</p>";
} else {
    echo "<p class='error'>Erro ao enviar o arquivo.</p>";
}
?>