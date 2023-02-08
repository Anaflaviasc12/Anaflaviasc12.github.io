<?php
    include "conexao.php";
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT); 

    $sth = $conexao->prepare("SELECT * FROM cadastro_pessoa where usu_nome = :usu_nome and usu_senha = :usu_senha");
    $sth->bindValue(':usu_nome', $data['nome']);
    $sth->bindValue(':usu_senha', $data['senha']);

    $sth->execute();
   
    if ($sth->rowCount() > 0) {
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        extract($row);
        session_start();
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['senha'] = $_POST['senha'];
        $_SESSION['id'] = 1;
        

        header('LOCATION: logado.php'); 
    } else {
        header('LOCATION: login.php');
    }
?>


