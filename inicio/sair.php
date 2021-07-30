<?php

if (isset($_COOKIE['usuario'])) {
    unset($_COOKIE['usuario']);
    setcookie('usuario', null, -1, '/');
    header("Location:../entrar");
}

?>