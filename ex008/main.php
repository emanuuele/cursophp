<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisar número real</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
    <h1>
    Resultado
    </h1>

    <main>
    <?php 
        $value = (float) $_GET["value"] ?? 1;

        $numeroInteiro = floor($value);
        $parteReal = fmod($value, 1);

        echo "Parte inteira: $numeroInteiro, parte real: $parteReal"
    ?>
    </main>
    </section>
</body>
</html>