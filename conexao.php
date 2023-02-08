<?php
    try {
        $conexao = new PDO("mysql:host=localhost; dbname=adega_bdii", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//O método setAttribute() nos permite adicionar atributos no objeto de conexão
        $conexao->exec("set names utf8");
    } catch (PDOException $erro) {
        echo "Erro na conexão:" . $erro->getMessage();
    }
?>