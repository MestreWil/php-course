<div class="titulo">Include Função</div>

<?php

echo "Carregando: include_funcao.php<br>";

function carregarArquivo()
{
    include('include_arquivo.php');

    echo $var . "<br>";
    echo soma(2, 5) . "!<br>";
}

echo "Novamente no arquvivo include_funcao<br>";
echo carregarArquivo() . "!<br>";

//Bagulho bizarro, quando vc utiliza o include dentro de uma funcao, esse include está restrito ao escopo da funcao da qual vc fez
// o include, porem, uma vez que a funcao com o include for instanciada no arquivo, vc tem acesso as funcoes desse include fora 
// do escopo da funcao, porem variaveis nao 
echo $var . "eae meus bacanos<br>";
echo soma(8, 9) . "!<br>";