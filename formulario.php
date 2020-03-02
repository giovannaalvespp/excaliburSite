<?php
header('Content-Type: text/html; charset=utf-8');
    $nome = $_POST['chaveNome'];
    $email = $_POST['chaveEmail'];
    $tel = $_POST['chaveTel'];
    $msn = $_POST['chaveMsn'];
     include_once "db_connect.php";

     $sql_insert = "INSERT INTO contatogeral (Nome, Email, Telefone, Mensagem) VALUES (:chaveNome, :chaveEmail, :chaveTel, :chaveMsn)";

     $stmt = $PDO->prepare($sql_insert);

     $stmt->bindParam(':chaveNome', $nome);
     $stmt->bindParam(':chaveEmail', $email);
     $stmt->bindParam(':chaveTel', $tel);
     $stmt->bindParam(':chaveMsn', $msn);

     if ($stmt->execute()) {
         echo "ta lá no banco";
     } else {
         echo "não era tão simples assim";
     }
     ?>
     

     