<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Juros de Financiamento</title>
</head>
<body>

<?php
// Valor à vista do carro
$valorAVista = 22500.00;

// Valor do financiamento (principal)
$principal = 489.65 * 60;

// Taxa de juros anual
$taxaJurosAnual = ($principal - $valorAVista) / $valorAVista;

// Número de vezes que os juros são compostos por ano (mensal)
$compostoMensalmente = 12;

// Tempo em anos
$tempoAnos = 5;

// Calcular o montante pago por Mariazinha
$montante = $principal * pow(1 + ($taxaJurosAnual / $compostoMensalmente), $compostoMensalmente * $tempoAnos);

// Calcular o valor gasto apenas com os juros
$jurosGastos = $montante - $principal;

echo '<p>O valor total do financiamento foi R$ ' . number_format($principal, 2, ',', '.') . '</p>';
echo '<p>O valor gasto apenas com os juros foi R$ ' . number_format($jurosGastos, 2, ',', '.') . '</p>';
?>

</body>
</html>