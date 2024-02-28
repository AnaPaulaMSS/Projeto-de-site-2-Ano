<?php
require('Cadastro.html');
require('conexao.php');
$usuario = $_POST['nick'];
$rm = $_POST['rm'];
$senha = $_POST['senha'];
$nome = $_POST['login'];

try{
    $stmt = $pdo->prepare('INSERT INTO `bartosugestech`.`usuario` (`usuario`, `rm`, `senha`, `nome`) VALUES (:nome, :rm, :senha, :nome)');
    $stmt -> execute(array(
        ':usuario' => $usuario,
        ':rm' => $rm,
        ':senha' => $senha,
        ':nome' => $nome
    ));
    echo $stmt -> rowCount();
    header ('location:Login.html');
}catch(PDOException $e){
    echo 'Erro: '. $e -> getMessage();
    echo ("Não inseriu corretamente");
}
?>
