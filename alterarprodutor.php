<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>

    <link rel="stylesheet" href="stylecadProdutor.css">

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

<nav class="navbar navbar-expand-lg text-light"  style="background-color:rgba(105, 10, 10, 0.74) ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="images/Logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false"
          aria-label="Toggle navigation">
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

<?php
    // Bloco if que recupera as informações no formulário, etapa utilizada pelo Update
    // Verifica se foi enviando dados via GET
    if ($_GET) {
        $id = (isset($_GET["cod"]) && $_GET["cod"] != null) ? $_GET["cod"] : "";
        //echo "<script>alert('".$id."');</script>";
        include 'conexao.php';
        try {
            $stmt = $conexao->prepare("SELECT * FROM produtor WHERE id= ?");
            $stmt->bindParam(1, $id);
            if ($stmt->execute()) {
                $rs = $stmt->fetch(PDO::FETCH_OBJ);
                $id = $rs->id;
                $nome2 = $rs->pro_nome;
                $Cpf = $rs->pro_Cpf;  
                $regiao = $rs->pro_regiao;

                //echo "<script>alert('".$marca."');</script>";
            } else {
                throw new PDOException("Erro: Não foi possível executar a declaração sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: ".$erro->getMessage();
        }
    }
?>


<div class="content">
  <form action="validarProdutor.php" method="POST">
            <h1 style="color:black ;" align="center">Produtor</h1> 
            <br>
            <label for="pro_nome" style="color: black;">Nome:</label>
            <input type="text" name="pro_nome" required="required" id="pro_nome" value="<?php echo $nome2 ?>">
            <br><br>
            <label for="pro_Cpf" style="color: black;">CPF/CNPJ:</label>
            <input type="text"  name="pro_Cpf" required="required"  id="pro_Cpf" value="<?php echo $Cpf ?>">
            <br><br>
            <label for="pro_regiao" style="color: black;">Região:</label>
            <input type="text" name="pro_regiao" required="required"  id="pro_regiao" value="<?php echo $regiao ?>">
            <br><br>
            
            <input type="submit" name="Alterar"  value="Alterar" style="background-color:rgba(105, 10, 10, 0.74); color:white;">

  </form>
</div>

<?php
  if ($_POST) {
    $nome2 = $_POST['txtpro_nome'];
    $Cpf = $_POST['txtpro_Cpf'];
    $regiao = $_POST['txtpro_regiao'];
    $id = $_POST['txtid'];

    include "conexao.php";

    try {
      //$stmt = $conexao->prepare("INSERT INTO carro (marca, modelo, preco) values('{$marca}', '{$modelo}', '{$preco}')");
      //$stmt = $conexao->prepare("INSERT INTO carro (marca, modelo, preco) values('".$marca."', '".$modelo."', '".$preco."')");
      $stmt = $conexao->prepare("UPDATE vinho SET pro_nome=?, pro_Cpf=?, pro_regiao=? WHERE id=?");
      $st->bindParam(1, $nome2);
      $st->bindParam(2, $Cpf);
      $st->bindParam(3, $regiao);
      $st->bindParam(4, $id);
      if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
          header('location: tabelaProdutor.php');
        } else {
          //throw new PDOException("Erro: Não foi possível executar a declaração sql");
          echo "Erro: Não foi possível executar a declaração sql";
        }
      } else {
        echo "Erro na execução do cadastro!";
      }
    } catch (PDOException $erro) {
      echo "Erro na conexão:" . $erro->getMessage();
    }
  }
  ?>

</body>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</html>



