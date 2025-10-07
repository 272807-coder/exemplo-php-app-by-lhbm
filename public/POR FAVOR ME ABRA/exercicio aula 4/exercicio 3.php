<?php
$imagem = "foto.jpg"; // Certifique-se de que a imagem existe na mesma pasta
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Imagem Dinâmica</title>
</head>
<body>
    <h1>Imagem</h1>
    <img src="<?php echo $imagem; ?>" alt="Imagem dinâmica" width="300">
</body>
</html>