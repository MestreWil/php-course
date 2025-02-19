<div class="titulo">Try/Catch</div>

<?php

//echo 7 / 0;
//echo intdiv(7, 0);
// Error é algo mais fatal

// Exception é uma excessão a regra
try {
    echo intdiv(7, 0);
} catch(Error $e){
    echo 'Kk, tem erro man<br>';
}

try {
    throw new Exception('Um erro muito estranho'); // uso o throw para jogar uma excessao
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch (Throwable $e){ // com a palavra throwable ele pega a excessao e exibi o erro
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'PHP é foda';
}
// o try é para acoplar um bloco que codigo que possivelmente vai gerar um erro, e o catch é para tratar esse erro
// vc pode ter mais de um catch para cada tipo  de erro
// e o finally é um bloco que vai executar sempre que o try for executado, ele gerando erro ou nao