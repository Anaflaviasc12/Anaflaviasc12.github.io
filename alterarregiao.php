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
            $stmt = $conexao->prepare("SELECT * FROM regiao WHERE id= ?");
            $stmt->bindParam(1, $id);
            if ($stmt->execute()) {
                $rs = $stmt->fetch(PDO::FETCH_OBJ);
                $id = $rs->id;
                $nome3 = $rs->regiao_end;
                $numero = $rs->regiao_num;
                $cidade = $rs->regiao_cid;  
                $compl = $rs->regiao_compl;
                $uf = $rs->regiao_uf;
                $regiao = $rs->regiao_bairro;  
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
  <form action="validarRegiao.php" method="POST">
            <h1 style="color:black ;" align="center">Região</h1> 
            <br>
            <div class="uno">
            <label for="regiao_end" style="color: black;">Endereço:</label>
            <input type="text" name="regiao_end" required="required"id="regiao_end" value="<?php echo $nome3?>">
            <br><br>
            <label for="regiao_num" style="color: black;">Nº:</label>
            <input type="number" name="regiao_num" required="required" id="regiao_num" value="<?php echo $numero?>">
            <br><br>
            <label for="regiao_cid" style="color: black;">Cidade</label>
            <input type="text" name="regiao_cid" required="required"id="regiao_cid" value="<?php echo $cidade?>">
            <br><br>
            <label for="regiao_compl" style="color: black;">Complento:</label>
            <input type="text" name="regiao_compl" required="required"  id="regiao_compl" value="<?php echo $compl?>">
            <br><br>
            <label for="regiao_uf" style="color: black;">UF:</label>
            <input type="text" name="regiao_uf" required="required" id="regiao_uf" value="<?php echo $uf?>">
            <br><br>
            <label for="regiao_bairro" style="color: black;">Bairro:</label>
            <input type="text" name="regiao_bairro" required="required"  id="regiao_bairro" value="<?php echo $regiao?>">
            <br><br>
            </div>
           
            <input type="submit" name="Alterar" value="Alterar" style="background-color:rgba(105, 10, 10, 0.74); color:white;">

  </form>
</div>


  </div>
  </div>

  </div>

  <?php
  if ($_POST) {
    $nome3 = $_POST['txtregiao_end'];
    $numero = $_POST['txtregiao_num'];
    $cidade = $_POST['txtregiao_cid'];
    $compl = $_POST['txtregiao_compl'];
    $uf = $_POST['txtregiao_uf'];
    $regiao = $_POST['txtregiao_bairro'];
    $id = $_POST['txtid'];

    include "conexao.php";

    try {
      //$stmt = $conexao->prepare("INSERT INTO carro (marca, modelo, preco) values('{$marca}', '{$modelo}', '{$preco}')");
      //$stmt = $conexao->prepare("INSERT INTO carro (marca, modelo, preco) values('".$marca."', '".$modelo."', '".$preco."')");
      $stmt = $conexao->prepare("UPDATE vinho SET regiao_end=?, regiao_num=?, regiao_cid=?, regiao_compl=?, regiao_uf=?, regiao_bairro=? WHERE id=?");
      $st->bindParam(1, $nome3);
      $st->bindParam(2, $numero);
      $st->bindParam(3, $cidade);
      $st->bindParam(4, $compl);
      $st->bindParam(5, $uf);
      $st->bindParam(6, $regiao);
      $st->bindParam(7, $id);
      if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
          header('location: tabelaregiao.php');
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