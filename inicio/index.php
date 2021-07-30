<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <link href="../css/colors.css" type="text/css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site teste — Inicio</title>
</head>
<body>
<?php
  $usuario_cookie = $_COOKIE['usuario'];
    if(isset($usuario_cookie)){
      echo"Bem-Vindo, $usuario_cookie <br>";
      echo"Essas informações <font class='blue'>PODEM</font> ser acessadas por você";
      echo"<br><a href='sair.php' style='color: red;'>Sair</a>";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font class='orange'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='../entrar'>Faça Login</a> Para ler o conteúdo";
    }
?>
</body>
</html>