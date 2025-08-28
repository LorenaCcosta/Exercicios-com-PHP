<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
  <div class="container">
    <h2 class="title">Saiba se o número é divisivel por 10, 5 e 2</h2>
    <form method="get" class="form">

        <label for="numero" class="label">Digite o número:</label>
        <input type="number" name="numero" id="numero" class="input_number">

        <input type="submit" value="Concluir" class="input_submit">
    </form>

    <?php
        if(isset($_GET["numero"])) {
            $num = $_GET["numero"];

            echo '<div class="container_echo" id="resultado">';

            echo '<span class="close_result" onclick="close_result()"><i class="fa-solid fa-xmark"></i></span>';

           if($num % 10 == 0){

            echo '<div class="text_echo">É divisivel por 10. </div>';
           }

           if($num % 5 == 0){
            echo '<div class="text_echo">É divisivel por 5. </div>';
          }

          if($num % 2 == 0){
            echo '<div class="text_echo">É divisivel por 2. </div>';

          }else{
            echo '<div class="text_echo">Não é divisivel por 10, 5, ou 2. </div>';
          }
          echo '</div>';
        }
    ?>

    <a href="index.php">
        <input type="button" value="Voltar ao  início"  class="input_voltar">
    </a>
  </div>
</body>
</html>