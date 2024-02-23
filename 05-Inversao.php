<?php

function inverteString($texto) {
    //pegamos o número de caracteres com strlen e criamos a inversa
    $tamanho = strlen($texto);
    $inversa = '';

    //aqui usamos um for para percorrer ao contrário a palavra, então pegamos o tamanho completo em seguida criamos uma instrução de que i deve ser igual ou maior a zero e decrementamos o i para ir lendo a palavra de trás pra frente
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        //aqui estamos contruindo a string inversa
        $inversa .= $texto[$i];
    }

    return $inversa;
}


$stringOriginal = "Exemplo";
$stringInvertida = inverteString($stringOriginal);
echo "Original: $stringOriginal\n";
echo "Invertida: $stringInvertida\n";