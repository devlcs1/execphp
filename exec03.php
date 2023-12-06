<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área do Quadrado</title>
</head>
<body>

<form method="post" action="">
    <label for="ladoQuadrado">Insira o comprimento do lado do quadrado em metros:</label>
    <input type="number" name="ladoQuadrado" id="ladoQuadrado" required>
    <button type="submit">Calcular Área</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $ladoDoQuadrado = $_POST["ladoQuadrado"];


    $area = $ladoDoQuadrado * $ladoDoQuadrado;


    echo '<p>A área do quadrado de lado ' . $ladoDoQuadrado . ' metros é ' . $area . ' metros quadrados.</p>';
}
?>

</body>
</html>