<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exércicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <label for="numero1">Digite o primeiro número:
        <input type="number" name="numero1" id="numero1">
        </label>

        <label for="numero2">Digite o segundo número:
        <input type="number" name="numero2" id="numero2">
        </label>

        <input type="submit" value="Somar">
    </form>

    <?php
        if(isset($_GET["numero1"]) && isset($_GET["numero2"])) {
            $num1 = $_GET["numero1"];
            $num2 = $_GET["numero2"];

            $soma = $num1 + $num2;

            if($soma > 20) {
                echo $soma + 8;
            } else{
                echo $soma - 5;
            }
        }
    ?>

    <a href="index.php">
        <input type="button" value="Voltar para a página Inicial">
    </a>
</body>
</html>