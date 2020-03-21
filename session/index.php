<?php 

	session_start(); 
	
	if(isset($_SESSION['username']) == true){

		header("Location: pagina.php");

	}
?>
<form enctype="multipart/form-data" method="post" action="">
    <input type="text" name="user" placeholder="Usuario.">
	<input type="password" name="password" placeholder="Senha.">
	<input type="submit" name="env">

</form>

	
	<?php
    session_start();

		if(isset($_POST['env'])){
			
            $password = $_POST['password'];
            $user=$_POST['user'];
            $_SESSION['username']=$user;

			if( $password == $_POST['password'] ){

				$_SESSION['password'] = $password;

				header("Location: pagina.php");

			}else{

				echo "Não está logado";

			}



		}

	?>
