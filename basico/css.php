<div class="titulo">Integração HTML</div>

<h1 center>
<?php
echo 'Olá ';
echo '<small>';
echo "\nMundo";
echo '</small>';
?>
</h1>

<?= "<div center azul>Outra forma de ne 'expressar'!</div>"?>

<br>
<div center><button dobro><?="Legal" ?></button></div>

<style>

     button {
          padding: 5px 20px;
          background-color: #4282f3;
          color: #EEE;
          font-weigth: bold;
          border-radius: 10px;
     }

     [center] {
          display: flex;
          justify-content: center;
     }

     [azul] {
          color: #4286f4;
     }

     [dobro] {
          font-size: 2rem;
     }
</style>