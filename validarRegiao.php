<?php
    if($_POST){
        $end = $_POST['regiao_end'];
        $num = $_POST['regiao_num'];
        $cid = $_POST['regiao_cid'];
        $compl = $_POST['regiao_compl'];
        $uf = $_POST['regiao_uf'];
        $bairro = $_POST['regiao_bairro'];

        include "conexao.php";
        $st = $conexao->prepare("INSERT INTO regiao (regiao_end,regiao_num,regiao_cid,regiao_compl,regiao_uf,regiao_bairro) VALUES (?,?,?,?,?,?)");
        $st->bindParam(1, $end);
        $st->bindParam(2, $num);        
        $st->bindParam(3, $cid);        
        $st->bindParam(4, $compl);
        $st->bindParam(5, $uf);        
        $st->bindParam(6, $bairro);        
                
        if($st->execute()){
            if($st->rowCount()>0){
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                header("refresh: 2, tabelaregiao.php");
            }else{
                echo "Erro nenhuma linha executada";
            }
        }else{
            echo "Erro no execute()";
        }
    }
?>