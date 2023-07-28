<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n1 = (float) $_GET["n1"] ?? 0;
            $n2 = (float) $_GET["n1"] ?? 0;
            $op = $_GET["op"];
            $resultado = 0;
            switch ($op) {
                case '+':
                    $resultado = $n1 + $n2;
                    break;
                case '-': 
                    $resultado = $n1 - $n2;
                    break;
                case '*':
                    $resultado = $n1 * $n2;
                    break;
                case '/':
                    $resultado = $n1 / $n2;
                    break;
                default:
                    $resultado = 0;
                    break;
            }
            echo "<p>$resultado</p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>