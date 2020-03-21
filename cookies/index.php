<?php
if(isset($_COOKIE['nome']) && isset($_GET['deletecookie'])){
    unset($_COOKIE['nome']);
    echo '<script>alert("cookie deletado")
    </script>'; 
} if(isset($_POST['user'])){
    setcookie('nome', $_POST['user'], time()+60*60*24*30);
    header("location: index.php");
}else{ 
    if(isset($_COOKIE['nome'])){
        echo $_COOKIE['nome']; 
        echo "<a href='?deletecookie=true'><button>Deletar Cookie</button></a>"; 
    }else{ 
?>
<form method="POST" action="index.php">
    <input type="text" id="user" name="user" placeholder="Nome"><br>
    <input type="submit" value="Enviar">
</form>
<?php } } ?>
