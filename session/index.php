<?php 

	session_start(); 
	
	if(isset($_SESSION['password']) == true){

		header("Location: pagina.php");

	}
?>
<form enctype="multipart/form-data" method="post" action="">
    <input type="text" name="user" placeholder="Usuario.">
	<input type="password" name="password" placeholder="Senha.">
	<input type="submit" name="env">

</form>

	
	<?php

		if(isset($_POST['env'])){
			
			$password = $_POST['password'];

			if( $password == $_POST['password'] ){

				$_SESSION['password'] = $password;

				header("Location: pagina.php");

			}else{

				echo "Não está logado";

			}



		}

	?>