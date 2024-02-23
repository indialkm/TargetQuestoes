<?php
    $dadosFaturamento = [
        'SP' => 67836.43,
        'RJ' => 36678.66,
        'MG' => 29229.88,
        'ES' => 27165.48,
        'Outros' => 19849.53
    ]; 

    $totalMensal = array_sum($dadosFaturamento);
//Aqui é somente a soma dos dados e depois jogamos dentro de um foreach para percorrer a array e ir fazendo o percentual e já aparecendo para qual estado é
    foreach($dadosFaturamento as $estado => $valor){
        $percentual = ($valor/ $totalMensal) * 100;
        echo "$estado:". number_format($percentual, 2, '.'). " %\n";
    }
