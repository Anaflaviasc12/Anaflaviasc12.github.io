<?php
    if($_POST){
        $nome2 = $_POST['pro_nome'];
        $regiao = $_POST['pro_regiao'];
        $cpf = $_POST['pro_Cpf'];
       
        include "conexao.php";
        $st = $conexao->prepare("INSERT INTO produtor (pro_nome,pro_Cpf,pro_regiao) VALUES (?,?,?)");
        $st->bindParam(1, $nome2);
        $st->bindParam(2, $cpf); 
        $st->bindParam(3, $regiao);       
                
        if($st->execute()){
            if($st->rowCount()>0){
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                header("refresh: 2, tabelaProdutor.php");
            }else{
                echo "Erro nenhuma linha executada";
            }
        }else{
            echo "Erro no execute()";
        }
    }
?>