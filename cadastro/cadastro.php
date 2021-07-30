<?php
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$servername = "localhost:3306";
$database = "acesso_php";
$username = "root";
$password = "root";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO usuarios(nome, usuario, email, senha) VALUES ('$nome','$usuario','$email','$senha')";
if (mysqli_query($conn, $sql)) {
      echo "Usuario cadastrado com sucesso.<script>location.href = '../entrar';</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>