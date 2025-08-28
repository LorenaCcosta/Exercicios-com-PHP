<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exércicio 1</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="title">Somar Números</h2>
        <form method="get" class="form">
            <label for="numero1" class="label">Digite o primeiro número:</label>
            <input type="number" name="numero1" id="numero1" class="input_number"><br>

            <label for="numero2" class="label" >Digite o segundo número:</label>
            <input type="number" name="numero2" id="numero2" class="input_number"><br>

            <input type="submit" value="Somar" class="input_submit"><br>
        </form>

            <?php
                if(isset($_GET["numero1"]) && isset($_GET["numero2"])) {
                    $num1 = $_GET["numero1"];
                    $num2 = $_GET["numero2"];

                    $soma = $num1 + $num2;

                    echo '<div class="container_echo" id="resultado">';

                    echo '<span class="close_result" onclick="close_result()"><i class="fa-solid fa-xmark"></i></span>';

                    if($soma > 20) {
                        echo '<div class="text_echo">Resultado: ' . $soma . ' + 8 = ' . ($soma + 8) . '.' .
                        '</div>';
                    } else{
                        echo '<div class="text_echo">Resultado: ' . $soma . ' - 5 = ' . ($soma - 5) .'.'.
                        '</div>';
                    }
                    echo '</div>';
                }
            ?>

        <a href="index.php">
            <input type="button" value="Voltar ao início" class="input_voltar">
        </a>
    </div>
</body>
</html>