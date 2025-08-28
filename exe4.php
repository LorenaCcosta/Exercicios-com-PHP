<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Ordenar Números</h3>

    <form method="get">
        <div>
            <div>
                <label for="numero1">Digite o primeiro número:</label>
                <input type="number" name="numero1" id="numero1">
            </div>

            <label for="numero2">Digite o segundo número:</label>
            <input type="number" name="numero2" id="numero2">


            <label for="numero3">Digite o terceiro número:</label>
            <input type="number" name="numero3" id="numero3">


            <input type="submit" value="Concluir">

    </form>

    <?php
    if (isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["numero3"])) {
        $numeros = array($_GET["numero1"], $_GET["numero2"], $_GET["numero3"]);
        rsort($numeros);

        echo $numeros[0] . ', ' . $numeros[1] . ', ' . $numeros[2];
    }
    ?>


    <a href="index.php">
        <input value="Voltar ao início" class="btn w-100">
    </a>


</body>

</html>