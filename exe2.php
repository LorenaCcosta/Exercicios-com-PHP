<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="numero1">Digite o número:
        <input type="number" name="numero" id="numero">
        </label>

        <input type="submit" value="Concluir">
    </form>

    <?php
        if(isset($_GET["numero"])) {
            $num = $_GET["numero"];

           if($num % 10 == 0){
             echo "<h3>É divisível por 10<h3>";
           }

           if($num % 5 == 0){
            echo "<h3>É divisível por 5<h3>";
          }

          if($num % 2 == 0){
            echo "<h3>É divisível por 2<h3>";
          }else{
            echo "<h3>Não é divisível por 2, 5 ou 10<h3>";
          }

        }


    ?>

    <a href="index.php">
        <input type="button" value="Voltar para a página Inicial">
    </a>
</body>
</html>