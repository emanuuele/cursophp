<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nº aleatório</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Gerar um número aleatório</h1>
    <main>
        <?php
        /* 
        rand() -> função fraca, mas a partr da versão 7.2, é um apontamento para a mt_rand
        mt_rand() -> função mais rápida para 
        random_int() -> função criptograficamente mais segura
        
        */
        $min = 0;
        $max = 100;
        $numeroaleatorio = mt_rand($min, $max);
        echo "<p>Número aleatrório gerado <strong>$numeroaleatorio</strong> </p>";
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>

    </main>
</body>

</html>