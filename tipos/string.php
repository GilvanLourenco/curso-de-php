<div class="titulo">Strings</div>
<?php
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu também");//o acento é contando como caractere
    echo '<br>';

    // Concatenação de strings
    echo "Nós também". ' somos';
    echo '<br>';

    echo "O echo", " também aceita", " vigulas";
    echo '<br>';

    print("também existem a função print");
    echo '<br>';

    echo strtoupper("Maximizado");
    echo '<br>';
    echo strtolower("MINIMIZADO");
    echo '<br>';
    echo ucfirst("só a primeira letra");
    echo '<br>';
    echo ucwords('todas as palavras');
    echo '<br>';

    echo strlen("quantas letras");
    echo '<br>';
    echo strlen('Eu também');
    echo '<br>';
    echo mb_strlen('Eu também');
    echo '<br>';
    echo mb_strlen('Eu também', 'utf-8');

?>