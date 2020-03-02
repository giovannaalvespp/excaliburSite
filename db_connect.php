<?php
    $dsn = "mysql:host=localhost:3306; dbname=excali42_contatogeral;charset=utf8";
    $usuario = "";
    $senha = "";
    try {
        $PDO = new PDO($dsn, $usuario, $senha);
        $PDO->query("SET NAMES UTF8");
        echo "conectado";
    } catch (PDOExeption $erro) {
        echo $erro;
    }
