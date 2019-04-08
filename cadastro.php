<?php
include 'conn.php';
include 'header.php';

if(isset($_GET['nome'],$_GET['senha'],$_GET['email'],$_GET['cpf'])){
	
	if(!empty($_GET['nome']) && !empty($_GET['senha']) &&
		!empty($_GET['email'] && !empty($_GET['cpf']))){
		
		$stmt = $conn->prepare('insert into usuario (nome,senha,email,cpf)
								values (:nome,:senha,:email,:cpf)');
		$stmt->bindParam(':nome',$_GET['nome']);
		$stmt->bindParam(':senha',$_GET['senha']);
		$stmt->bindParam(':email',$_GET['email']);
		$stmt->bindParam(':cpf',$_GET['cpf']);

		$stmt->execute();

		header('location: index.php');
	}
}

?>
<!-- Main -->
	<div id="main">

		<!-- Intro -->
		<!-- Portfolio -->
		<!-- Usuarios -->
		<!-- Contact -->
			<section id="contact" class="four">
				<div class="container">

					<header>
						<h2>Cadastro</h2>
					</header>

					<form method="get" action="#">
						<div class="row">
							<div class="col-6 col-12-mobile"><input type="text" name="nome"	placeholder="Nome" value=""/></div>
							<div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email"  value="" /></div>
							<div class="col-6 col-12-mobile"><input type="text" name="senha" placeholder="Senha" value="" /></div>
							<div class="col-6 col-12-mobile"><input type="text" name="cpf" placeholder="Cpf" value="" /></div>
							<div class="col-12">
								<input type="submit" value="Cadastrar" />
							</div>
						</div>
					</form>
				</div>
			</section>
	</div>
<!-- Footer -->
<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	</body>
</html>