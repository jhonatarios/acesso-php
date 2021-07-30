<?php 
  $usuario = $_POST['usuario'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysqli_connect('localhost:3306','root','root','acesso_php');
  
    if (isset($entrar)) {
            
      $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'") or die("Erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Usuario e/ou senha incorretos');window.location.href='../entrar';</script>";
          die();
        }else{
          setcookie("usuario",$usuario, time()+(24*60*60*7), '/' );
          header("Location:../inicio");
        }
    }
?>
