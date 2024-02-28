<?php
try{
    $pdo = new PDO('mysql:host=localhost:3306;dbname:bartosugestech', 'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Erro: ' . $e->getmessage();
    echo("Não conectado");
}
?>