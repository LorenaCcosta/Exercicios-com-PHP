<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 5x5 - Ímpares e Pares</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2 {
            text-align: center;
            margin-bottom: 18px;
            color: #535353ff;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .grid-matriz {
            display: grid;
            grid-template-columns: repeat(5, 60px);
            gap: 8px;
            justify-content: center;
            margin-bottom: 20px;
        }
        .input_number {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
        }
        .input_submit {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 18px;
            width: 100%;
        }
        .input_submit:hover {
            background-color: #218838;
        }
        .input_voltar {
            padding: 10px;
            background-color: #fff;
            color: #373737ff;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
        .input_voltar:hover {
            background-color: #f0f0f0;
        }
        .container_echo {
            background-color: #e6edf3ff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            border: 1px solid #ccc;
            margin-bottom: 18px;
        }
        .close_result {
            float: right;
            cursor: pointer;
            color: #888;
            margin-top: -14px;
            margin-right: -12px;
        }
        pre {
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Digite os valores da matriz 5x5</h2>
        <form method="get">
            <div class="grid-matriz">
                <?php
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 5; $j++) {
                            echo "<input type='number' name='matriz[$i][$j]' class='input_number' required>";
                        }
                    }
                ?>
            </div>
            <input type="submit" value="Concluir" class="input_submit">
        </form>

        <?php
            if (isset($_GET["matriz"])) {
                $matriz = $_GET["matriz"];

                echo '<div class="container_echo" id="resultado">';
                echo '<span class="close_result" onclick="close_result()"><i class="fa-solid fa-xmark"></i></span>';

                // Função para imprimir bonitinho
                function imprimeMatriz($m) {
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 5; $j++) {
                            echo str_pad($m[$i][$j], 4, " ", STR_PAD_LEFT);
                        }
                        echo "<br>";
                    }
                }

                echo "<h3>Matriz completa:</h3><pre>";
                imprimeMatriz($matriz);
                echo "</pre>";

                // Matriz só ímpares
                $matrizImpares = [];
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 5; $j++) {
                        $matrizImpares[$i][$j] = ($matriz[$i][$j] % 2 != 0) ? $matriz[$i][$j] : " - ";
                    }
                }
                echo "<h3>Matriz só com ímpares:</h3><pre>";
                imprimeMatriz($matrizImpares);
                echo "</pre>";

                // Matriz só pares
                $matrizPares = [];
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 5; $j++) {
                        $matrizPares[$i][$j] = ($matriz[$i][$j] % 2 == 0) ? $matriz[$i][$j] : " - ";
                    }
                }
                echo "<h3>Matriz só com pares:</h3><pre>";
                imprimeMatriz($matrizPares);
                echo "</pre>";

                echo '</div>';
            }
        ?>

        <a href="index.php">
            <input type="button" value="Voltar ao início" class="input_voltar">
        </a>
    </div>

    <script>
        function close_result(){
            document.getElementById("resultado").style.display = "none";
        }
    </script>
</body>
</html>
