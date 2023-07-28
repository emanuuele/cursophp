<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor, antecessor</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Resultado</h1>
    <section>
        <?php
        $numero = (float) $_GET["numero"];
        $sucessor = $numero + 1;
        $antecessor = $numero - 1;

        echo "<p>O número escolhido foi $numero</p>";

        echo "<p>Seu sucessor é $sucessor</p>";

        echo "<p>Seu antecessor é $antecessor</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>

    </section>
</body>

</html>