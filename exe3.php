<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 3</title>
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
        .title {
            text-align: center;
            margin-bottom: 18px;
            color: #535353ff;
        }
        .form {
            text-align: left;
            display: flex;
            flex-direction: column;
        }
        .label {
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
    </style>
</head>
<body>
    <div class="container">
        <form class="form">
            <label for="nome" class="label">Digite o seu nome:</label>
            <input type="text" name="nome" id="nome" class="input_number">

            <label for="sexo" class="label">Sexo:</label>
                <select id="sexo" name="sexo" class="input_number">
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                </select>

            <label for="idade" class="label">Digite sua idade:</label>
            <input type="number" name="idade" id="idade" class="input_number">

            <input type="submit" value="Concluir" class="input_submit">
        </form>

        <?php
            if(isset($_GET["nome"]) && isset($_GET["sexo"]) && isset($_GET["idade"])) {
                $nome = $_GET["nome"];
                $idade = $_GET["idade"];
                $sexo = $_GET["sexo"];

                echo '<div class="container_echo" id="resultado">';

                echo '<span class="close_result" onclick="close_result()"><i class="fa-solid fa-xmark"></i></span>';

                    if($sexo == "feminino" && $idade < 25){
                        echo '<div class="text_echo">Olá ' . $nome . ', você foi: <strong>ACEITO(A)</strong> </div>';
                    }else if(){
                        echo '<div class="text_echo"> <span>Por favor digite os campos em branco!</span> </div>';
                    } else {
                        echo '<div class="text_echo">Olá ' . $nome . ', você <strong>NÃO  FOI ACEITO(A)</strong> </div>';
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