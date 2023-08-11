<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Resultado</h1>

        <?php
        $dataHoje = new DateTime();
        $dataHoje = (string) $dataHoje->format('m-d-Y');

        $value = (float) $_GET["value"] ?? 1;

        $cotacaoHoje = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='08-10-2023'&format=json");

       

        curl_setopt($cotacaoHoje, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($cotacaoHoje);

        if (curl_error($cotacaoHoje)) {
            echo curl_error($cotacaoHoje);
        } else {
            $dados = json_decode($response);
            $valorCtHoje = round($dados->value[0]->cotacaoCompra, 2);
            $valorTotal = $value * $valorCtHoje;
            echo "Convertendo R\$$value para dólar, fica $valorTotal. Cotação: $valorCtHoje";
        }
        
        curl_close($cotacaoHoje)
        ?>
    </main>
</body>

</html>