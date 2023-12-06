<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área do Triângulo Retângulo</title>
</head>
<body>

<form method="post" action="">
    <label for="base">Insira o valor da base do triângulo em metros:</label>
    <input type="number" name="base" id="base" required>

    <label for="altura">Insira o valor da altura do triângulo em metros:</label>
    <input type="number" name="altura" id="altura" required>

    <button type="submit">Calcular Área</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os valores da base e altura do formulário
    $base = $_POST["base"];
    $altura = $_POST["altura"];

    // Calcular a área do triângulo retângulo
    $resultado = ($base * $altura) / 2;

    // Exibir a frase com o resultado
    echo '<p>A área do triângulo retângulo com base ' . $base . ' e altura ' . $altura . ' é ' . $resultado . '.</p>';
}
?>

</body>
</html>