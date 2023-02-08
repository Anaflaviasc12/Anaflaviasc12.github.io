
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  </head>

  <body>

    <nav class="navbar navbar-expand-lg text-light" style="background-color:rgba(105, 10, 10, 0.74) " >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="images/Logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          
            <a class="nav-link" href="login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="login">
      <div>
          <img src="">
      </div>

      <form action="validar.php" method="POST">
          <h1 style="color:black ;" align="center">Login</h1> 
          <br>
          <input type="text" name="nome" required="required" placeholder="Nome" id="nome">
          <br><br>
          <input type="password" name="senha" required="required" placeholder="Senha" id="senha">
          <br><br>
          
          <input type="submit" name="Entrar" style="background-color:rgba(105, 10, 10, 0.74); color:white;"><a href="validar.php">

          <form action="cadastroPessoa.php" method="POST">
          <br><br>
          <label class="link" style="color: black;">Não Possui uma conta?<a href="cadastro.php">Cadastre-se </a></label>
          </form>
      </form>
  </div>
  

</body>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>