<?php 
include("conexao.php");

    $nomedocurso=$_POST['nomedocurso'];
    $duracao=$_POST['duracao'];
    $datainicio=$_POST['datainicio'];
    $datatermino=$_POST['datatermino'];
    


    $sql="INSERT INTO curso(nomedocurso, duracao, datainicio, datatermino ) 
    VALUES('$nomedocurso','$duracao','$datainicio','$datatermino')";

    if(mysqli_query($conexao, $sql)){
        echo "Curso cadastrado";
            }else{
        echo "erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar curso| Wake Up House</title>
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="stylesheet" href="css/cadastros.css">

</head>
<body>
    <fieldset>
        <div class="caixadeformulario">
          <img src="midias/logo/wakeuphouselogo2.png" width="366px">
          <div class="formulario">
          <legend>Adicionar um novo curso:</legend>
  
              <br>
              <div class="textoformulario">
                <form action="cadastrarcurso.php" method="post">
                  <aside>
                  <div>
                      <label for="name">Nome do curso:</label>
                      <input type="text" id="name" name="nomedocurso">
                  </div>
                  <div>
                      <label for="name">Duração:</label>
                      <input type="text" id="name" name="duracao">
                  </div>
                  <div><label for="dtaNascimento">Data de início:</label>
                  <input type="date" id="datainicio" name="datainicio" placeholder="Insira a data de início">
                </div>
                <div><label for="dtaNascimento">Data de término:</label>
                    <input type="date" id="datatermino" name="datatermino" placeholder="Insira a data de término">
                  </div>
                 
  
                      <div class="button">
                      <button type="submit">Enviar</button>
                      </aside>
                  </div>
              </form>
                  <br>
          </div>
          </div>
      </fieldset>
</body>
</html>