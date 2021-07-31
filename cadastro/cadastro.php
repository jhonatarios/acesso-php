<?php
// Preenchidos
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

// Incluir conexao ao db
$conn= new mysqli_connect ("localhost:3306","root","root","acesso_php") or die(mysqli_error($conn));

// Checar -Preenchidos- nulos
if(empty($_POST['nome']) || empty($_POST['usuario']) || 
   empty($_POST['email']) || empty($_POST['senha'])) {
      echo "<script language='javascript' type='text/javascript'>alert('Ainda há campos sem preencher');window.location.href='index.html';</script>";
      exit;
}else{     
      $sql = "INSERT INTO usuarios(nome, usuario, email, senha) VALUES ('$nome','$usuario','$email','$senha')";

      if(mysqli_query($conn, $sql)){
            echo "Usuario cadastrado com sucesso.<script>location.href = '../entrar';</script>";
      }else{
            echo "<script language='javascript' type='text/javascript'>alert('Usuario ou email já cadastrados no sistema, tente um usuario ou email diferentes.');window.location.href='index.html';</script>" . mysqli_error($conn);
      }

      // Desconectar
      mysqli_close($conn);
}
?>
