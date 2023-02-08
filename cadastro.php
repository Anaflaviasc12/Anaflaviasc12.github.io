<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="stylecadPessoa.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
    <style>
        *{
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
  <nav class="navbar navbar-expand-lg text-light" style="background-color: rgba(105, 10, 10, 0.74) ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="images/Logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="login.php">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="content">
      <div id="cadastro">
        <form method="post" action="validar_cadastrar.php">
          <h1 style="color: black;" align="center">Cadastro</h1>

          <p>
            <label for="nome_cad " style="color: black;">Seu Usuario</label>
            <input id="nome_cad" name="usu_cad" required="required" type="text" placeholder="nome" />
          </p>


          <p>
            <label for="senha_cad" style="color: black;">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Senha" />
          </p>

          <p>
            <input type="submit" name="cadastrar" style="background-color:rgba(105, 10, 10, 0.74); color:white;">
          </p>

          <p class="link" style="color: black;">Já tem uma conta?<a href="login.php"> Ir para Login </a></p>
        </form>
      </div>
    </div>

  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>