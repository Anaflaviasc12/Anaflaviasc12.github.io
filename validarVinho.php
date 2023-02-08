<?php
    if($_POST){
        $nome3 = $_POST['vi_nome'];
        $casta = $_POST['vi_casta'];
        $safra = $_POST['vi_safra'];
        $pro = $_POST['vi_pro'];
        $regiao = $_POST['vi_regiao'];
       
        include "conexao.php";
        $st = $conexao->prepare("INSERT INTO vinho (vi_nome,vi_casta,vi_safra,vi_pro,vi_regiao) VALUES (?,?,?,?,?)");
        $st->bindParam(1, $nome3);       
        $st->bindParam(2, $casta);        
        $st->bindParam(3, $safra);        
        $st->bindParam(4, $pro);        
        $st->bindParam(5, $regiao);        
                
        if($st->execute()){
            if($st->rowCount()>0){
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
                header("refresh: 2, tabelavinho.php");
            }else{
                echo "Erro nenhuma linha executada";
            }
        }else{
            echo "Erro no execute()";
        }
    }
?>