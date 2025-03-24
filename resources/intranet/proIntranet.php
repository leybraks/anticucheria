<?php
    session_start();
    $USUcorrecto = "admin";
    $PASScorrecto = "admin";
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    if ($usuario == $USUcorrecto && $clave == $PASScorrecto) {
        $_SESSION['login'] = "admin";
        header("location:Intranet.php");
        $usuario = 0;
        $clave = 0;
        exit();
    } elseif (empty($_POST['usuario']) || empty($_POST['clave'])) {
        header("location:vacio.php");
        exit();
    } else {
        header("Location:index.php");
        exit();
    }
?>