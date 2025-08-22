<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="nome">Digite o seu nome:
        <input type="text" name="nome" id="nome">
        </label>

        <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
            </select>

        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade">

        <input type="submit" value="Concluir"><br>
    </form>

    <?php
        if(isset($_GET["nome"]) && isset($_GET["sexo"]) && isset($_GET["idade"])) {
            $nome = $_GET["nome"];
            $idade = $_GET["idade"];
            $sexo = $_GET["sexo"];

            if($sexo == "feminino" && $idade < 25){
                echo "Olá $nome, você foi: ";
                echo "<strong>ACEITO(A)</strong";
            }else{
                echo "Olá $nome, você foi: ";
                echo "<strong>NÃO ACEITO(A)</strong";
            }
        }
    ?>
    <br>

    <a href="index.php">
        <input type="button" value="Voltar para a página Inicial">
    </a>
</body>
</html>