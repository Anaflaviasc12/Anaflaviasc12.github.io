<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Produtor</title>
    <link rel="stylesheet" href="tabelas.css">
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

    <div class="titulo mt-4" align="center" style="background-color:rgba(105, 10, 10, 0.74); margin-left:auto; margin-right:auto; width:300px; border-radius:20px; color:white;">
        <h3> Tabela Produtor </h3>
    </div>

    <div class="teste" style="
    margin-left :auto;
    margin-right :auto;
    margin-top: 10px;
    width:90%;
    height: 30px;">
        <form method="POST" action="">
            <label style="font-size:larger;"> Barra de pesquisa: </label>
            <input type="text" name="pesquisar" placeholder=" ..." style="border-radius: 8px; border-width: thin;font-style: italic;">
            <input type="submit" value="buscar" style='width:90px; height:30px ; font-size:medium ; background-color: rgba(105, 10, 10, 0.74); border-radius:10px; border:none; color:white;'>


        </form>
    </div>




    <div class="boxtable mt-2">
        <table class="table">
            <thead class="bar text-white" align="center">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Casta</th>
                    <th scope="col">Safra</th>
                    <th scope="col">Produtor</th>
                    <th scope="col">Região</th>
                    <th scope="col">Edições</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php
                include "conexao.php";
                if ($_POST) {
                    $P = $_POST["pesquisar"];
                    if (!empty($P)) {
                        $A = "SELECT * FROM vinho WHERE vi_nome =  '" . $P . "' ORDER BY id DESC";
                    } else {
                        $A = "SELECT * FROM vinho ORDER BY id DESC";
                    }
                } else {
                    $A = "SELECT * FROM vinho ORDER BY id DESC";
                }
                try {
                    $stmt = $conexao->prepare($A);
                    if ($stmt->execute()) {
                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                            echo "<tr>
                                <td>{$rs->id}</td>
                                <td>{$rs->vi_nome}</td>
                                <td>{$rs->vi_casta}</td>
                                <td>{$rs->vi_safra}</td>
                                <td>{$rs->vi_pro}</td>
                                <td>{$rs->vi_regiao}</td>
                                <td><button type='button' class='btn btn-secondary' style='height:30px; font-size:x-small;'><a href='alterarvinho.php?cod={$rs->id}' style='color:white'>Alterar</a></button>
                                <button type='button' class='btn text-white' style='height:30px ; font-size:x-small ;background-color: rgba(105, 10, 10, 0.74);'> <a href='vinhoExcluir.php?cod={$rs->id}' style='color:white'>Deletar</a></button>
                                </td>
                                </tr>";
                        }
                    }
                } catch (PDOException $erro) {
                    echo "Erro na conexão:" . $erro->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>



</body>

</html>