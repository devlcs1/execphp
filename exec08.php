<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Parcelas com Juros Simples</title>
</head>
<body>

<?php
// Valor à vista da moto
$valorAVista = 8654.00;

// Taxa de juros inicial
$taxaJurosInicial = 0.015; // 1,5%

// Números de parcelas
$parcelas = [24, 36, 48, 60];

foreach ($parcelas as $numParcelas) {
    // Calcula a taxa de juros para o número de parcelas atual
    $taxaJuros = $taxaJurosInicial + ($numParcelas - 24) * 0.005;

    // Calcula o valor de cada parcela
    $valorParcela = ($valorAVista * (1 + $taxaJuros * $numParcelas)) / $numParcelas;

    echo "<p>Para $numParcelas vezes, o valor de cada parcela é R$ " . number_format($valorParcela, 2, ',', '.') . "</p>";
}
?>

</body>
</html>