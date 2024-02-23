<?php

$jsonFaturamento = file_get_contents('faturamento.json');
$data = json_decode($jsonFaturamento, true);

$minFaturamento = min($data['faturamento_diario']);
$maxFaturamento = max($data['faturamento_diario']);
$mediaMensal = array_sum($data['faturamento_diario']) / count($data['faturamento_diario']);

//Depois de termos usado o array_sum para somar os numeros do faturamento diario e feito a média com a quantidade de faturamentos. Nós vamos usar o foreach para percorrer o array e descobrir qual dos faturamentos é maior do que é média

$diasAcimaMedia = 0;
foreach ($data['faturamento_diario'] as $valor) {
    if ($valor > $mediaMensal) {
        $diasAcimaMedia++;
    }
}

echo "Menor valor de faturamento: $minFaturamento\n";
echo "Maior valor de faturamento: $maxFaturamento\n";
echo "Dias acima da média mensal: $diasAcimaMedia\n";