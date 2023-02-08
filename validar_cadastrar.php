<?php
    if($_POST){
        $usu = $_POST['usu_cad'];
        $sen = $_POST['senha_cad'];
        include "conexao.php";
        $st = $conexao->prepare("INSERT INTO cadastro_pessoa (usu_nome, usu_senha) VALUES (?,?)");
        $st->bindParam(1, $usu);
        $st->bindParam(2, $sen);        
        if($st->execute()){
            if($st->rowCount()>0){
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                header("refresh: 2, login.php");
            }else{
                echo "Erro nenhuma linha executada";
            }
        }else{
            echo "Erro no execute()";
        }
    }
?>