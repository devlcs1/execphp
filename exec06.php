<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Compras do Joãozinho</title>
</head>
<body>

<form method="post" action="">
    <label for="precoMaca">Preço por Kg da Maçã:</label>
    <input type="number" step="0.01" name="precoMaca" required>

    <label for="precoMelancia">Preço por Kg da Melancia:</label>
    <input type="number" step="0.01" name="precoMelancia" required>

    <label for="precoLaranja">Preço por Kg da Laranja:</label>
    <input type="number" step="0.01" name="precoLaranja" required>

    <label for="precoRepolho">Preço por Kg do Repolho:</label>
    <input type="number" step="0.01" name="precoRepolho" required>

    <label for="precoCenoura">Preço por Kg da Cenoura:</label>
    <input type="number" step="0.01" name="precoCenoura" required>

    <label for="precoBatatinha">Preço por Kg da Batatinha:</label>
    <input type="number" step="0.01" name="precoBatatinha" required>

    <label for="quantidadeMaca">Quantidade de Maçã (em Kg):</label>
    <input type="number" step="0.01" name="quantidadeMaca" required>

    <label for="quantidadeMelancia">Quantidade de Melancia (em Kg):</label>
    <input type="number" step="0.01" name="quantidadeMelancia" required>

    <label for="quantidadeLaranja">Quantidade de Laranja (em Kg):</label>
    <input type="number" step="0.01" name="quantidadeLaranja" required>

    <label for="quantidadeRepolho">Quantidade de Repolho (em Kg):</label>
    <input type="number" step="0.01" name="quantidadeRepolho" required>

    <label for="quantidadeCenoura">Quantidade de Cenoura (em Kg):</label>
    <input type="number" step="0.01" name="quantidadeCenoura" required>

    <label for="quantidadeBatatinha">Quantidade de Batatinha (em Kg):</label>
    <input type="number" step="0.01" name="quantidadeBatatinha" required>

    <button type="submit">Calcular Compra</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os valores do formulário
    $precoMaca = $_POST["precoMaca"];
    $precoMelancia = $_POST["precoMelancia"];
    $precoLaranja = $_POST["precoLaranja"];
    $precoRepolho = $_POST["precoRepolho"];
    $precoCenoura = $_POST["precoCenoura"];
    $precoBatatinha = $_POST["precoBatatinha"];

    $quantidadeMaca = $_POST["quantidadeMaca"];
    $quantidadeMelancia = $_POST["quantidadeMelancia"];
    $quantidadeLaranja = $_POST["quantidadeLaranja"];
    $quantidadeRepolho = $_POST["quantidadeRepolho"];
    $quantidadeCenoura = $_POST["quantidadeCenoura"];
    $quantidadeBatatinha = $_POST["quantidadeBatatinha"];

    // Calcular o valor total gasto
    $totalGasto = ($precoMaca * $quantidadeMaca) +
                  ($precoMelancia * $quantidadeMelancia) +
                  ($precoLaranja * $quantidadeLaranja) +
                  ($precoRepolho * $quantidadeRepolho) +
                  ($precoCenoura * $quantidadeCenoura) +
                  ($precoBatatinha * $quantidadeBatatinha);

    // Valor disponível
    $dinheiroDisponivel = 50.0;

    // Verificar se o dinheiro é suficiente
    if ($totalGasto > $dinheiroDisponivel) {
        $valorFaltante = $totalGasto - $dinheiroDisponivel;
        echo '<p style="color: red;">Valor acima do disponível por Joãozinho: R$ ' . $valorFaltante . '</p>';
    } elseif ($totalGasto == $dinheiroDisponivel) {
        echo '<p style="color: green;">Saldo para compras esgotado.</p>';
    } else {
        $valorRestante = $dinheiroDisponivel - $totalGasto;
        echo '<p style="color: blue;">Joãozinho ainda pode gastar R$ ' . $valorRestante . '.</p>';
    }

    // Exibir o valor total da compra
    echo '<p>O valor total da compra foi R$ ' . $totalGasto . '</p>';
}
?>

</body>
</html>