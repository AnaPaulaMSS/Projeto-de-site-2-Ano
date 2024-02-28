<!DOCTYPE html>
<html lang="pt-br">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/94625dcb7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="estilo.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bartô Sugestech</title>
</head>
<body class="gradient">
    <!--troquei a cor-->
    <!--TOPO-->
    <div id="topoNome">
        <a href="bartosugestech.php"><img src="Logo.png" height="80px"></a>
    </div>
    <div id="icone">
        <a href="Login.html" class="icone">
            <i class="material-icons" style="font-size:55px;color:#540c2c"><ul class="icone"> person</ul> </i>
            </a>
</div>
    <!--IMAGEM-->
    <div id="img_topo"><img src="barto.png" width="100%" height="450vw"></div>

	<!--MENU-->
    <div id="menu">
        <ul class="menu">
           
                <li><a href="bartosugestech.php">Home</a></li>
                <li><a href="#">Categorias</a>
                    <ul>
                    <li><a href="sugestoes.php">Sugestões</a></li>
                        <li><a href="elogios.php">Elogios</a></li>
                        <li><a href="criticas.php">Críticas</a></li>
                    </ul>
                </li>
                <li><a href="bartosugestech-ajuda.html">Central Ajuda</a></li>
           
        </ul>
    </div>

    <!--PÚBLICAÇÕES-->
 
    
    </div>
    <div class="blur"></div>
    <div id="corpo">
            <?php
                 require('conexao.php');
                 if(!empty($_POST['msg'])){ 
                 $html = $_POST['tipo'];
                 $postagem = $_POST['msg'];
         
                 switch ($html) {
         
                     case '1':
                         $stmt = $pdo->prepare('INSERT INTO `bartosugestech`.`postagens` (`postagens`, `id_tipo`) VALUES (:postagens,1)');
                         $stmt -> execute(array(
                         ':postagens' => $postagem
                         ));
                         break;
                     case '2':
                         $stmt = $pdo->prepare('INSERT INTO `bartosugestech`.`postagens` (`postagens`, `id_tipo`) VALUES (:postagens,2)');
                         $stmt -> execute(array(
                         ':postagens' => $postagem
                         ));
                         break;
                     case '3':
                         $stmt = $pdo->prepare('INSERT INTO `bartosugestech`.`postagens` (`postagens`, `id_tipo`) VALUES (:postagens,3)');
                         $stmt -> execute(array(
                         ':postagens' => $postagem
                         ));
                         break;    
                     case '4':
                         $stmt = $pdo->prepare('INSERT INTO `bartosugestech`.`postagens` (`postagens`, `id_tipo`) VALUES (:postagens,4)');
                         $stmt -> execute(array(
                         ':postagens' => $postagem
                         ));
                         break; 
                     
                 }
                 }
                  try{
                      //$stmt = $pdo->query('INSERT INTO `bartosugestech`.`usuario` (`usuario`, `rm`, `senha`, `nome`) VALUES (:nome, :rm, :senha, :nome)');
                      $stmt = $pdo->query("SELECT postagens FROM bartosugestech.postagens WHERE id_tipo=1" );
                      //$stmt = $pdo->query("SELECT id, nome, senha FROM agendapw2ab.usuario WHERE nome ='$login' AND senha = '$senha'");
                      
                      while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                         ?>
                        <div id="quadrado3">
                         <div id="quadrado1"><span class="material-symbols-outlined">account_circle</span>Usuário</div>
                          <div id="quadrado2"></div>
                         <div id="quadrado0"><?php echo "{$linha['postagens']} "; ?></div>
                    </div><br/>
                     <?php   
                        
                      }
                  }catch(PDOException $e){
                      echo 'Erro: '. $e -> getMessage();
                      echo ("Não inseriu corretamente");
                  }
            ?> 


</div>

    <!--RODAPÉ-->

    <footer class="footer">
        <ul class="copy">
        	<p><br/> &copy Copyright 2022 - Bartô Sugestech | BS | Plataforma Bartô Sugestech | Todos os Direitos Reservados<br/><br/>
                Ana Paula Marques da Silva Santos - Gustavo Henrique - Jhennifer de Jesus Correia - Leticía Borges da <br/><br/>
                Menções honrosas: <br/>
                Pedro 2-B &nbsp&nbsp
                João Fernandes Neves 2-A &nbsp&nbsp
                Luís Godoy 2-A &nbsp&nbsp </p>
        </ul>
        <ul class=icons>
          	<a href="mailto:e262.secretaria@etec.sp.gov.br" target="_blank" class="btn-gmail"> <i class='fas fa-envelope'> </i> </a>
      		<a href="https://wa.me/5511972106407" class="btn-whatsapp" target="_blank"> <i class='fab fa-whatsapp'> </i> </a>
      		<a href="https://www.instagram.com/bartolove262/" target="_blank" class="btn-instagram"> <i class='fab fa-instagram'> </i> </a>
        </ul>
      </footer>
      
      <!--Criar-->

      <bottom id="cadastro"><span class="material-symbols-outlined" style="font-size:px;color:white"><ul class="criar">edit</ul></span></bottom>

	  <!--Login-->
      <div class="container" id="login">
        <div class="modal">
            <button class="close">X</button>
            <ul class="postagem">
                <form method="post">
                <li><a href="#">Categorias</a>
                    <ul>
                  <div class="radio"><label><input type="radio" id="html" name="tipo" value="1">Sugestões</label></br> </div>
                  <div class="radio"><label><input type="radio" id="css" name="tipo" value="2">Elogios</label></br></div>
                  <div class="radio"><label><input type="radio" id="javascript" name="tipo" value="3">Críticas</label></div>
                </ul>
            </li>
                <textarea id="msg" name="msg" rows="26" cols="66" style="border-color:#000; position: relative; left: 0px;"></textarea>
                <span class="material-symbols-outlined" style="font-size: 55px; position: relative; left: 8px; color:white;">
                    account_circle
                    </span>
                <input type="submit" value="Postar" style="background-color:#243859; font-size: 15px; padding: 15px; position: relative; top: -20px; left:65%; width: 20%; cursor: pointer; border-radius: 45%; color:white;">
              </form>
        </ul>
    </div>
    </div>
    
	<script src="login.js"></script>
</body><a href="mailto:"></a>
</html>