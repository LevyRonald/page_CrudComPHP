<?php
    require_once 'db_connect.php';

    session_start();

    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>


<html lang="pt-br">


<head>
<!-- Início Head -->

	<meta charset="utf-8">
	<title>GoldCake | Receitas</title>
	<link rel="stylesheet" type="text/css" href="../css/Rec.css">
    <link rel="shortcut icon" type="download/png" href="../img/ab.png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Fim Head -->
</head>
<body>
    <!-- Header -->
	<header>

		<img src="../img/Logo.png" class="logo" height="180px;">
		
        <!-- Nav -->
        <ul class="menu">
			<li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="receitas.php">Receitas</a></li>
        </ul>
		
		<input type="text" class="barra-search">
		
        <i class="fa fa-search" id="lupa" aria-hidden="true"></i>
		
        <a href="register.php"><i class="fa fa-user-circle-o" aria-hidden="true" id="person" 
        title="login"></i></a>
        <a href= "logout.php"><i class="fa fa-sign-out" aria-hidden="true" id="sair" title="Sair"></i></a>
	</header>
     <div class="ondas"> </div>

    <!-- Fim Header -->
        <h1 style="text-align: center;font-family: lobster;margin-top: 30px; margin-bottom: -30px">Receitas</h1>
		<section class="receitas-contanier">
		<div class="receitas">
			<div class="rec1" id="rec1" style="background-image: url(../img/BoloCenora.jpg); background-repeat: no-repeat; background-position: center; background-size:cover; cursor:pointer;"><h2 style="text-align: center; margin-top: 60px;">Bolo de Cenoura</h2></div>
			<div class="rec1" id="rec2"  style="background-image: url(../img/boloFuba.jpeg);background-repeat: no-repeat; background-position: center; background-size:cover; cursor:pointer;"><h2 style="text-align: center; margin-top: 60px;">Bolo de Fuba</h2></div>
			<div class="rec1" id="rec3"  style="background-image: url(../img/boloChocolate.webp);background-repeat: no-repeat; background-position: center; background-size:cover; cursor:pointer;"><h2 style="text-align: center; margin-top: 60px;">Bolo de Chocolate</h2></div>
			<div class="rec1" id="rec4"  style="background-image: url(../img/BoloLaranja.jpg);background-repeat: no-repeat; background-position: center; background-size:cover; cursor:pointer;"><h2 style="text-align: center; margin-top: 60px;">Bolo de Laranja</h2></div>
			
		</div>
	</section>


	<!-- Receitas -->

   <!-- Fim Receitas -->


       <!-- Início Contato -->

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

    <!-- Fim Contato -->
    

    <!-- Footer ínicio -->
    <footer>
        <p>Gold Cake ©</p>
    </footer>
    <!-- Footer Fim -->


    <div id="modal-pro" class="modal-contanier">
    	<div class="modal">
    		<button class="fechar">X</button>
    		<h3 class="subtitulo" style="text-align: center;">Bolo de Cenoura</h3>
    		<div style="text-align: center; padding: 10px;">
    			<img src="../img/BoloCenora.jpg" style="float: left;">
    			<p style="padding: 8px">INGREDIENTES<br>
    				<hr>
                1 lata de milho verde<br>
                1 lata de óleo (medida da lata de milho)<br>
                1 lata de açúcar (medida da lata de milho)<br>
                1 lata de fubá (medida da lata de milho) <br>
                4 ovos<br>
                2 colheres (sopa) de farinha de trigo <br>
                2 colheres (sopa) de coco ralado<br>
                1 e 1/2 colher (chá) de fermento em pó</p>
                MODO DE PREPARO<br>
				Massa:

				Em um liquidificador adicione os ovos, o chocolate em pó, a manteiga, a farinha de trigo, o açúcar e o leite, depois bata por 5 minutos.

				Adicione o fermento e misture com uma espátula delicadamente.

				Em uma forma untada, despeje a massa e asse em forno médio (180 ºC) preaquecido por cerca de 40 minutos. Não se esqueça de usar uma forma alta para essa receita: como leva duas colheres de fermento, ela cresce bastante! Outra solução pode ser colocar apenas uma colher de fermento e manter a sua receita em uma forma pequena.

				Calda:

				Em uma panela, aqueça a manteiga e misture o chocolate em pó até que esteja homogêneo.

				Acrescente o creme de leite e misture bem até obter uma consistência cremosa.

				Desligue o fogo e acrescente o açúcar
    		</div>
    	</div>
    </div>
    <div id="modal-proB" class="modal-contanier">
    	<div class="modal">
    		<button class="fechar">X</button>
    		<h3 class="subtitulo" style="text-align: center;">Bolo de Fuba</h3>
    		<div style="text-align: center; padding: 10px;">
    			<img src="../img/boloFuba.jpeg" style="float: left;">
    			<p style="padding: 8px">INGREDIENTES<br>
    			<hr>
				3 ovos inteiros<br>
				2 xícaras (chá) de açúcar<br>
				2 xícaras (chá) de fubá<br>
				3 colheres (sopa) de farinha de trigo<br>
				1/2 copo (americano) de óleo<br>
				1 copo (americano) de leite<br>
				1 colher (sopa) de fermento em pó
				<br>
				MODO DE PREPARO<br>
				Em um liquidificador, adicione os ovos, o açúcar, o fubá, a farinha de trigo, o óleo, o leite e o fermento, depois bata até a massa ficar lisa e homogênea.

				Despeje a massa em uma forma untada e polvilhada.

				Leve para assar em forno médio 180 °C) preaquecido por 40 minutos.
                
    		</div>
    	</div>
    </div>
    <div id="modal-proC" class="modal-contanier">
    	<div class="modal">
    		<button class="fechar">X</button>
    		<h3 class="subtitulo" style="text-align: center;">Bolo de Chocolate</h3>
    		<div style="text-align: center; padding: 10px;">
    			<img src="../img/boloChocolate.webp" style="float: left;">
    			<p style="padding: 8px">INGREDIENTES<br>
    			<hr>
				Massa:
				4 ovos<br>
				4 colheres (sopa) de chocolate em pó<br>
				2 colheres (sopa) de manteiga<br>
				3 xícaras (chá) de farinha de trigo<br>
				2 xícaras (chá) de açúcar<br>
				2 colheres (sopa) de fermento<br>
				1 xícara (chá) de leite<br>
				Calda:<br>
				2 colheres (sopa) de manteiga<br>
				7 colheres (sopa) de chocolate em pó<br>
				2 latas de creme de leite com soro<br>
				3 colheres (sopa) de açúcar<br>
				MODO DE PREPARO<br><br>
				Massa:<br>

				Em um liquidificador adicione os ovos, o chocolate em pó, a manteiga, a farinha de trigo, o açúcar e o leite, depois bata por 5 minutos.

				Adicione o fermento e misture com uma espátula delicadamente.

				Em uma forma untada, despeje a massa e asse em forno médio (180 ºC) preaquecido por cerca de 40 minutos. Não se esqueça de usar uma forma alta para essa receita: como leva duas colheres de fermento, ela cresce bastante! Outra solução pode ser colocar apenas uma colher de fermento e manter a sua receita em uma forma pequena.

				Calda:<br>

				Em uma panela, aqueça a manteiga e misture o chocolate em pó até que esteja homogêneo.

				Acrescente o creme de leite e misture bem até obter uma consistência cremosa.

				Desligue o fogo e acrescente o açúcar.
    		</div>
    	</div>
    </div>
    <div id="modal-proD" class="modal-contanier">
    	<div class="modal">
    		<button class="fechar">X</button>
    		<h3 class="subtitulo" style="text-align: center;">Bolo de Laranja</h3>
    		<div style="text-align: center; padding: 10px;">
    			<img src="../img/BoloLaranja.jpg" style="float: left;">
    			<p style="padding: 8px">INGREDIENTES<br>
    			<hr>
		
					<p>4 ovos
					2 xícaras (chá) de açúcar<br>
					1 xícara (chá) de óleo<br>
					suco de 2 laranjas<br>
					casca de 1 laranja<br>
					2 xícaras (chá) de farinha de trigo<br>
					1 colher (sopa) de fermento<br><br>

					MODO DE PREPARO
					<br>
					Bata no liquidificador os ovos, o açúcar, o óleo, o suco e a casca da laranja.

					Passe para uma tigela e acrescente a farinha de trigo e o fermento.

					Leve para assar em uma forma com furo central, untada e enfarinhada, por mais ou menos 30 minutos.

					Desenforme o bolo e molhe com suco de laranja.</p>
                
    		</div>
    	</div>
    </div>

    <script type="text/javascript">
    	function inicialModal(modalID){
    		const modal = document.getElementById(modalID);
    		if (modal) {
    		modal.classList.add('mostrar');
    		modal.addEventListener('click', (e) => {
    			if (e.target.id == modalID || e.target.className == 'fechar') {
    				modal.classList.remove('mostrar')}});
    	}}
    	const rec = document.querySelector('#rec1');
    	rec.addEventListener('click', function(){
    		inicialModal('modal-pro')
    	});</script>

    <script type="text/javascript">
    	function inicialModalB(modalID){
    		const modalB = document.getElementById(modalID);
    		if (modalB) {
    		modalB.classList.add('mostrar');
    		modalB.addEventListener('click', (e) => {
    			if (e.target.id == modalID || e.target.className == 'fechar') {
    				modalB.classList.remove('mostrar')}});
    	}}
    	const recB = document.querySelector('#rec2');
    	recB.addEventListener('click', function(){
    		inicialModalB('modal-proB')
    	});</script>


    <script type="text/javascript">
    	function inicialModalC(modalID){
    		const modalC = document.getElementById(modalID);
    		if (modalC) {
    		modalC.classList.add('mostrar');
    		modalC.addEventListener('click', (e) => {
    			if (e.target.id == modalID || e.target.className == 'fechar') {
    				modalC.classList.remove('mostrar')}});
    	}}
    	const recC = document.querySelector('#rec3');
    	recC.addEventListener('click', function(){
    		inicialModalC('modal-proC')
    	});</script>	
 
     <script type="text/javascript">
    	function inicialModalD(modalID){
    		const modalD = document.getElementById(modalID);
    		if (modalD) {
    		modalD.classList.add('mostrar');
    		modalD.addEventListener('click', (e) => {
    			if (e.target.id == modalID || e.target.className == 'fechar') {
    				modalD.classList.remove('mostrar')}});
    	}}
    	const recD = document.querySelector('#rec4');
    	recD.addEventListener('click', function(){
    		inicialModalD('modal-proD')
    	});</script>	
    
</body>
</html>