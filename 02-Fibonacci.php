<?php


function numeroFibonacci($numero)
{
    $num1 = 0;
    $num2 = 1;

    //Enquanto $num2 for menor ou igual que $numero ele vai fazendo a soma.
    // 1° reserva $num1 para a soma final; 2° coloca o valor de $num2 em $num1 para salvar para o próximo loop; agora soma os valores de num02 e reserva  

    while($num2 <= $numero){ 
        
    if($num2 === $numero){
        echo "$numero pertence à sequência de Fibonacci.";
    }
        $reserva = $num1;
        $num1 = $num2;
        $num2 = $num2 + $reserva;
        echo $num2 . " ";
    }

        echo "$numero não pertence à sequência de Fibonacci.";
}

$numeroTeste = 21;
numeroFibonacci($numeroTeste);

