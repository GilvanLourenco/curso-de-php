<div class="titulo">Operações Aritméticas</div>
<?php
echo '1 + 1= ',1 + 1, '<br>';
var_dump(1+1);
echo '<br>';
echo '1 + 2.5= ', 1 +2.5, '<br>';
echo '10 - 2= ',10 -2, '<br>';
echo '2 x 5= ', 2 * 5, '<br>';
echo '7 / 4= ', 7 / 4, '<br>';
//Divisão de inteiros, intdiv vai truncar o valor, para aredondar usar o "round"
echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>';
//Resto da divisão
echo 'O resto da divisão 7/4 é: ', 7 % 4, '<br>';
//Se o resto da divisão por 2 foi zero, o número é par, se for 1 ele será impar
echo 7 % 2, ' número impar<br>';
echo 10 % 2, ' número par<br>';
//4 elevado a 2
echo '4 elevado a 2= ', 4 ** 2, '<br>';
//Precedência de operadores
//() => ** => / * % => * -;
echo 'Precedência <br>';
echo '2 + 3 * 4= ', 2 + 3 * 4, '<br>';
echo '(2 + 3) * 4= ', (2 + 3)* 4, '<br>';
echo '2 + 3 *4 ** 2= ', 2 + 3 * 4 ** 2, '<br>';
echo '((2 + 3)* 4)** 2 =',((2+3)*4)**2, '<br>';
?>