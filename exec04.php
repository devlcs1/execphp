<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área do Retângulo</title>
</head>
<body>

<form method="post" action="">
    <label for="ladoA">Insira o comprimento do lado A em metros:</label>
    <input type="number" name="ladoA" id="ladoA" required>

    <label for="ladoB">Insira o comprimento do lado B em metros:</label>
    <input type="number" name="ladoB" id="ladoB" required>

    <button type="submit">Calcular Área</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $ladoA = $_POST["ladoA"];
    $ladoB = $_POST["ladoB"];


    $area = $ladoA * $ladoB;

    $tagHTML = ($area > 10) ? 'h1' : 'h3';


    echo '<' . $tagHTML . '>A área do retângulo de lados ' . $ladoA . ' e ' . $ladoB . ' metros é ' . $area . ' metros quadrados.</' . $tagHTML . '>';
}
?>

</body>
</html>