<?php
    require('Login.html');
    require('conexao.php');
    $usuario = $_POST['nick'];
    $senha = $_POST['senha'];

    try{
        //$stmt = $pdo->query('INSERT INTO `bartosugestech`.`usuario` (`usuario`, `rm`, `senha`, `nome`) VALUES (:nome, :rm, :senha, :nome)');
        $stmt = $pdo->query("SELECT usuario,senha FROM bartosugestech.usuario WHERE usuario='$usuario' AND senha = '$senha'");
        //$stmt = $pdo->query("SELECT id, nome, senha FROM agendapw2ab.usuario WHERE nome ='$login' AND senha = '$senha'");
        $stmt -> execute(array(
            ':usuario' => $usuario,
            ':senha' => $senha,
            ));
        echo $stmt -> rowCount();
        header ('location:bartosugestech.php');
    }catch(PDOException $e){
        echo 'Erro: '. $e -> getMessage();
        echo ("Não inseriu corretamente");
    }
?>