<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Tipos primitivos</h1>

    <?php 
    $numB = 0b10;
    $numO = 010;
    $numH = 0x1A;
    $num = 3e2;
    $bool = false;

    echo "O valor da variável é" . $num;
    var_dump($num, $numO, $bool)
    ?>
</body>
</html>