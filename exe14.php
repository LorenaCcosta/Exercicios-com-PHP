<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crescimento do Chico e Juca</title>

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
            margin-bottom: 18px;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Calcular Crescimento de Chico e Juca</h2>
    <form>
         <label>Altura do Chico (m):</label>
            <input type="number" step="0.01" name="chico" value="1.50" class="input_number" required>

            <label>Crescimento do Chico (m/ano):</label>
            <input type="number" step="0.01" name="cresChico" value="0.02" class="input_number" required>

            <label>Altura do Juca (m):</label>
            <input type="number" step="0.01" name="juca" value="1.10" class="input_number" required>

            <label>Crescimento do Juca (m/ano):</label>
            <input type="number" step="0.01" name="cresJuca" value="0.03"  class="input_number" required>
            
            <input type="submit" value="Calcular" class="input_submit">
    </form>

    <?php
        if (isset($_GET["chico"]) && isset($_GET["cresChico"]) && isset($_GET["juca"]) && isset($_GET["cresJuca"])) {
            $chico = $_GET['chico'];
            $cresChico = $_GET['cresChico'];
            $juca = $_GET['juca'];
            $cresJuca = $_GET['cresJuca'];

            $anos = 0;
            

            echo '<div class="container_echo" id="resultado">';

            echo '<span class="close_result" onclick="close_result()"><i class="fa-solid fa-xmark"></i></span>';

             while ($juca <= $chico) {
                $chico += $cresChico;
                $juca += $cresJuca;
                $anos++;
            }

            echo "Serão necessários <strong>$anos anos</strong> para que Juca seja maior que Chico.<br>";
            echo "Altura final de Chico: <strong>" . number_format($chico, 2, ',', '.') . " m</strong><br>";
            echo "Altura final de Juca: <strong>" . number_format($juca, 2, ',', '.') . " m</strong>";

            echo '</div>';
        }
    ?>

    <a href="index.php">
        <input type="button"value="Voltar ao início" class="input_voltar">
    </a>

    </div>

    <script>
        function close_result(){
        document.getElementById("resultado").style.display = "none";
        }
    </script>


    
</body>
</html>