<div class="titulo">Tipo Boolean</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>'.var_dump(true);
echo '<br>'.var_dump(False);
echo '<br>';
echo '<br>'.var_dump('false');
echo '<br>'.is_bool(false);
echo '<br>'.is_bool('true');

// fazer as regras de conversõs
echo '<p>Regras: </p>';
echo '<br>'.var_dump((bool) 0 ); // apenas o numero 0 é false
echo '<br>'.var_dump((bool) 20);
echo '<br>'.var_dump((bool) -1);
echo '<br>'.var_dump((bool) 0.0); //false
echo '<br>'.var_dump((bool) 0.00000000000001);
echo '<br>'.var_dump((bool) ""); // false
echo '<br>'.var_dump((bool) "0"); // false
echo '<br>'.var_dump((bool) " "); //todo o esti é tru
echo '<br>'.var_dump((bool) "00");
