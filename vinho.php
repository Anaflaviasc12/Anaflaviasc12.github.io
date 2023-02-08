<?php
if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION['id'])) {
  header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vinho</title>

  <link rel="stylesheet" href="stylecadVinho.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <style>
    * {
      margin: 0px;
      padding: 0px;
      font-family: Arial, Helvetica, sans-serif;

    }

    .navbar a {
      color: aliceblue;
    }

    .navbar-brand img {
      width: 50px;
      height: 30px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg text-light" style="background-color:rgba(105, 10, 10, 0.74) ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="images/Logo.PNG">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="logado.php">Home</a>
          <a class="nav-link" href="região.php">Região</a>
          <a class="nav-link" href="produtor.php">Produtor</a>
          <a class="nav-link" href="vinho.php">Vinho</a>
          <a class="nav-link" href="sair.php">Sair</a>

        </div>
      </div>
    </div>
  </nav>


  <div class="opcao" >
  <button type="button" class="btn " style="color:white; border-radius:20px; float:left; margin-top: 20px; margin-left: 20px; background-color:rgba(105, 10, 10, 0.74)" >
  <a  href="tabelavinho.php" style="color:white; border:none; text-decoration:none">Vizualizar tabela</a></button>
  </div>


  <div class="content">
    <form action="validarVinho.php" method="POST">
      <h1 style="color:black ;" align="center">Vinho</h1>
      <br>
      <label for="vi_nome" style="color: black;">Vinho nome:</label>
      <input type="text" name="vi_nome" required="required" id="vi_nome">
      <br><br>
      <label for="vi_casta" style="color: black;">Casta:</label>
      <input type="text" name="vi_casta" required="required" id="vi_casta">
      <br><br>
      <label for="vi_safra" style="color: black;">Safra:</label>
      <input type="text" name="vi_safra" required="required" id="vi_safra">
      <br><br>
      <label for="vi_pro" style="color: black;">Produtor:</label>
      <input type="text" name="vi_pro" required="required" id="vi_pro">
      <br><br>
      <label for="vi_regiao" style="color: black;"> Região:</label>
      <input type="text" name="vi_regiao" required="required" id="vi_regiao">
      <br><br>

      <input type="submit" name="Cadastrar" value="Cadastrar" style="background-color:rgba(105, 10, 10, 0.74); color:white;"><a href="tabelavinho.php"></a><br><br>

    </form>

  </div>

  <footer class=" text-white text-center text-lg-start mt-4" style="background-color:rgba(105, 10, 10, 0.74)">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: Ana Flávia 
  </div>
  <!-- Copyright -->
</footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>