<?php
    require_once 'db_connect.php';
    session_start();
    if(isset($_POST['btn-entrar'])){
        $erros= array();
        $email = mysqli_escape_string($connect, $_POST['email']);
        $senha =  mysqli_escape_string($connect, $_POST['senha']);

        if(empty($email) or empty($senha)){
            $erros[] = "<li>o campo login/senha precisa ser preenchido </li>";
        }
        else{
            $sql = "SELECT email FROM usuarios WHERE email = '$email'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0){
                $sql = "SELECT * FROM usuarios WHERE email ='$email' AND senha = '$senha' ";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) == 1){
                     $dados = mysqli_fetch_array($resultado);
                     $_SESSION['logado'] = true;
                     $_SESSION['id_usuario'] = $dados['$id'];
                     header('Location: receitas.php');
                }
                else{
                    $erros[] = "<li> usuario e senha não conferem </li> ";
                }
            }
            else{
                $erros[] = "<li class='alert'> Usuario não cadastrado</li>";
            }

        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Gold Cake | Login/Regiser </title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../css/reg.css">
     <link rel="shortcut icon" type="download/png" href="../img/ab.png">
</head>
<body>
	<header>
		<img src="../img/Logo.png" class="logo" height="180px;">
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="shop.php">Shop</a></li>
			<li><a href="sobre.php">Sobre</a></li>
            <li><a href="receitas.php">Receitas</a></li>
		</ul>
		
		<input type="text" class="barra-search">
		<i class="fa fa-search" id="lupa" aria-hidden="true"></i>
		<a href="register.php"><i class="fa fa-user-circle-o" aria-hidden="true" id="person"></i></a>
		<div class="ondas">	</div>

	</header>
	<div class="bg" style="background-image: url(../img/bgbolo.jpg); height:542px;">
		
	</div>

	<form action="" method="POST">
		<h1>Login</h1>
        <br>
        <hr>
        <br>
        <label>Email:</label>
        <input type="Email" name="email" required=""><br>
        <label>Senha:</label>
        <input type="password" name="senha" required=""><br>
        <input type="submit" name="btn-entrar" class="enviar" value="Logar"><br>
        <hr>
      <h3>Ainda não tem conta?<a href="register.php" class="btn-reg">Registre-se </a></h3>
       <?php
 
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo $erro;
                }
            }
        ?>
	</form>	
    <section id="contato">
        <h2>CONTATOS</h2>
        <p>Entre em contato conosco</p>
        <div>
        <i class="fa fa-phone fa-lg"></i>
        <p><a href="tel:xx55555555">(xx) 5555 5555</a></p>
        </div>

        <div>
            <i class="fa fa-envelope fa-lg"></i>
            <p><a href="goldencake@gmail.com">goldcake@gmail.com</a></p>
        </div>
    </section>

    <footer>
        <p>Gold Cake ©</p>
    </footer>
    


</body>
</html>