<div class="titulo">Intefração CSS</div>

<h1 center>
<?php
// Escrevendo html dentro do bloco php.
    echo 'Olá';
    echo '<small>';
    echo 'Mundo!';
    echo '</small>';
?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'</div>"?>
<br>
<!-- div centralizada com o texto do button em dobro -->
<div center><button dobro><?= "Legal"?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 10?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight:bold;
        border-radius: 10px;    
    }

    /* Variaveis css */
    [center] {
        display:flex;
        justify-content:center;
    }

    [azul]{
        color: #4286f4;
    }

    [dobro]{
        font-size:2rem;
    }
</style>