<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar Dados</title>
  <link rel="stylesheet" href="stylecadVinho.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </link>
</head>

<body>
  <nav class="navbar navbar-expand-lg text-light" style="background-color:rgba(105, 10, 10, 0.74) ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="images/Logo.png">
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

  <?php
  // Bloco if que recupera as informações no formulário, etapa utilizada pelo Update
  // Verifica se foi enviando dados via GET
  if ($_GET) {
    $id = (isset($_GET["cod"]) && $_GET["cod"] != null) ? $_GET["cod"] : "";
    //echo "<script>alert('".$id."');</script>";
    include 'conexao.php';
    try {
      $stmt = $conexao->prepare("SELECT * FROM vinho WHERE id= ?");
      $stmt->bindParam(1, $id);
      if ($stmt->execute()) {
        $rs = $stmt->fetch(PDO::FETCH_OBJ);
        $id = $rs->id;
        $nome3 = $rs->vi_nome;
        $casta = $rs->vi_casta;
        $safra = $rs->vi_safra;
        $pro = $rs->vi_pro;
        $regiao = $rs->vi_regiao;
        //echo "<script>alert('".$marca."');</script>";
      } else {
        throw new PDOException("Erro: Não foi possível executar a declaração sql");
      }
    } catch (PDOException $erro) {
      echo "Erro: " . $erro->getMessage();
    }
  }
  ?>

  <div class="content">
    <form action="validarVinho.php" method="POST">
      <h1 style="color:black ;" align="center">Vinho</h1>
      <br>
      <label for="vi_nome" style="color: black;">Vinho nome:</label>
      <input type="text" name="vi_nome" required="required" id="vi_nome" value="<?php echo $nome3 ?>">
      <br><br>
      <label for="vi_casta" style="color: black;">Casta:</label>
      <input type="text" name="vi_casta" required="required" id="vi_casta" value="<?php echo $casta ?>">
      <br><br>
      <label for="vi_safra" style="color: black;">Safra:</label>
      <input type="text" name="vi_safra" required="required" id="vi_safra" value="<?php echo $safra ?>">
      <br><br>
      <label for="vi_pro" style="color: black;">Produtor:</label>
      <input type="text" name="vi_pro" required="required" id="vi_pro" value="<?php echo $pro ?>">
      <br><br>
      <label for="vi_regiao" style="color: black;"> Região:</label>
      <input type="text" name="vi_regiao" required="required" id="vi_regiao" value="<?php echo $regiao ?>">
      <br><br>

      <input type="submit" name="Alterar" value="Alterar" style="background-color:rgba(105, 10, 10, 0.74); color:white;"><a href="tabelavinho.php"></a><br><br>

    </form>


  </div>
  </div>

  </div>

  <?php
  if ($_POST) {
    $nome3 = $_POST['txtvi_nome'];
    $casta = $_POST['txtcvi_casta'];
    $safra = $_POST['txtvi_safra'];
    $pro = $_POST['txtvi_pro'];
    $regiao = $_POST['txtvi_regiao'];
    $id = $_POST['txtid'];

    include "conexao.php";

    try {
      //$stmt = $conexao->prepare("INSERT INTO carro (marca, modelo, preco) values('{$marca}', '{$modelo}', '{$preco}')");
      //$stmt = $conexao->prepare("INSERT INTO carro (marca, modelo, preco) values('".$marca."', '".$modelo."', '".$preco."')");
      $stmt = $conexao->prepare("UPDATE vinho SET vi_nome=?, vi_casta=?, vi_safra=?, vi_pro=?, vi_regiao=? WHERE id=?");
      $st->bindParam(1, $nome3);
      $st->bindParam(2, $casta);
      $st->bindParam(3, $safra);
      $st->bindParam(4, $pro);
      $st->bindParam(5, $regiao);
      $st->bindParam(6, $id);
      if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
          header('location: tabelavinho.php');
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>