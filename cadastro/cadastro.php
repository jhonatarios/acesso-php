<?php
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$servername = "localhost:3306";
$database = "acesso_php";
$username = "root";
$password = "root";
// Criar conexao
$conn = mysqli_connect($servername, $username, $password, $database);
// Check conexao
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";


      // checar nulos
      if(empty($_POST['nome']) || empty($_POST['usuario']) || 
   empty($_POST['email']) || empty($_POST['senha'])) {
  echo "<script language='javascript' type='text/javascript'>alert('Ainda há campos sem preencher');window.location.href='index.html';</script>";
  exit;
}
else {

      // entrar
      $sql = "INSERT INTO usuarios(nome, usuario, email, senha) VALUES ('$nome','$usuario','$email','$senha')";
      if (mysqli_query($conn, $sql)) {
            echo "Usuario cadastrado com sucesso.<script>location.href = '../entrar';</script>";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);



}
 

?>