<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>"im giving my best..."</h1>
<form method="post" action="">
<label for="numero">Tell me a number please:</label>
<input type="number" name="numero" id="numero" required>
<button type="submit">Ver Tabuada</button>
</form>
<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    if ( is_numeric($numero)) {
        echo "<h2>Tabuada of $number<h2>";

        for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
    } else {
        echo "<p style='color: red;'>Please insert a valid number.</p>";
}
}
?>
</body>
</html>