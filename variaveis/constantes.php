<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS .'<br>';

const NOVA_TAXA = 2.5;
echo '<br>' .  NOVA_TAXA;

$valorVariavel =2.8;
define('NOVISSIMA_TAXA', $valorVariavel);
const NEW_TAXA= 2.8 +1.2;
echo '<br>' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;
