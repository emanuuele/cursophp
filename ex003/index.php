<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <h1>Aprendendo strings</h1>

    <?php 
    $nome = "emanuele";
    const IDADE = 19;
    echo "meu nome é $nome";
    ?>
    <?php 
    echo 'meu nome é $nome';
    ?>
    <?php 
    echo 'meu nome é ' . $nome . " tenho " .IDADE . " anos"
    ?>


    <?php 
    $filosofo= "socrates";
    $citacao = "só sei que nada sei";
    echo "\"$citacao\", $nome"
    ?>
</body>
</html>