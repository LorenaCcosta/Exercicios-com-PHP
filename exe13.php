<?php
session_start(); // sempre no início

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
    $_SESSION['numeros'] = []; // inicializa a lista de números
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar números entre 100 e 200</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            text-align: center;
            justify-content: center;
        }
        h2 {
            text-align: center;
            margin-bottom: -10px;
            color: #535353ff;
        }
        form {
            text-align: left;
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: lighter;
            font-size: 18px;
            color: #373737ff;
        }
        .input_number {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
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
        }
        .input_submit:hover {
            background-color: #218838;
        }
        .input_voltar {
            padding: 10px;
            background-color: #ffffffff;
            color: #373737ff;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            justify-content: left;
            width: 100%;
        }
        .input_voltar:hover {
            background-color: #f0f0f0;
        }
        .text_echo {
            font-size: 14px;
            color: #333;
            font-weight: bolder;
        }
        .container_echo {
            background-color: #e6edf3ff;
            padding:20px;
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
        h4{ 
            font-size: 12px; 
            text-align: left; 
            color: #535353ff; margin-bottom: 24px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contar números entre 100 e 200</h2>
        <h4>Digite 0 para encerrar*</h4>

        
        <form method="get">
            <label for="numero">Digite o número:</label>
            <input type="number" name="numero" id="numero" class="input_number" required>
            <input type="submit" value="Concluir" class="input_submit">
        </form>

        <?php
        if (isset($_GET["numero"])) {
            $num = (int) $_GET["numero"];

            echo '<div class="container_echo" id="resultado">';
            echo '<span class="close_result" onclick="close_result()"><i class="fa-solid fa-xmark"></i></span>';

            if ($num === 0) {
                echo "<h3>Quantidade de números entre 100 e 200: {$_SESSION['contador']}</h3>";
                echo "<p>Números digitados: " . implode(", ", $_SESSION['numeros']) . "</p>";
                session_destroy(); // encerra a contagem
            } else {
                $_SESSION['numeros'][] = $num;

                if ($num >= 100 && $num <= 200) {
                    $_SESSION['contador']++;
                }

                echo "Número $num adicionado. <br>";
                echo "Total atual de números entre 100 e 200: " . $_SESSION['contador'];
            }

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
