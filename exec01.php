<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Soma</title>
</head>
<body>

<form method="post" action="">
    <label for="valor1">Valor 1:</label>
    <input type="number" name="valor1" id="valor1" required>

    <label for="valor2">Valor 2:</label>
    <input type="number" name="valor2" id="valor2" required>

    <label for="valor3">Valor 3:</label>
    <input type="number" name="valor3" id="valor3" required>

    <button type="submit">Calcular Soma</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os valores do formulário
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];
    
    // Calcular a soma
    $resultado = $valor1 + $valor2 + $valor3;

    // Exibir o resultado com as condições de cor
    if ($valor1 > 10) {
        echo '<p style="color: blue;">Resultado: ' . $resultado . '</p>';
    } elseif ($valor2 < $valor3) {
        echo '<p style="color: green;">Resultado: ' . $resultado . '</p>';
    } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
        echo '<p style="color: red;">Resultado: ' . $resultado . '</p>';
    } else {
        echo '<p>Resultado: ' . $resultado . '</p>';
    }
}
?>

</body>
</html>