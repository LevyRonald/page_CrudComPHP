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
		</ul>
		
		<input type="text" class="barra-search">
		<i class="fa fa-search" id="lupa" aria-hidden="true"></i>
		<a href="register.php"><i class="fa fa-user-circle-o" aria-hidden="true" id="person"></i></a>
		<div class="ondas">	</div>

	</header>
	<div class="bg" style="background-image: url(../img/bgbolo.jpg); height: 542px;">
		
	</div>
	<form action="create.php" method="POST">
		<h1>Cadastro</h1>
		<br>
		<hr>
		<br>
		<label>Email:</label>
		<input type="Email" name="email" required=""><br>
		<label>Nome:</label>
		<input type="text" name="nome" required=""><br>
		<label>Senha:</label>
		<input type="password" name="senha" required=""><br>
		<input type="submit" name="btn-cadastrar" class="enviar" value="enviar"><br>
		<hr>
		<h3>Já fez seu cadastro?<a href="login.php" class="btn-reg">Entrar</a></h3>
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