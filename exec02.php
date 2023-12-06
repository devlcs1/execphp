<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Divisibilidade por 2</title>
</head>
<body>

<form method="post" action="">
    <label for="numero">Insira um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Verificar Divisibilidade</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter o valor do formulário
    $numero = $_POST["numero"];

    // Verificar se é divisível por 2
    if ($numero % 2 == 0) {
        echo '<p>Valor divisível por 2</p>';
    } else {
        echo '<p>O valor não é divisível por 2</p>';
    }
}
?>

</body>
</html>