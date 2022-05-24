<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "farmacia";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "Não pode conectar a base de dados";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("Não se encontra na base de dados");
    mysqli_set_charset($conexion,"utf8");
?>
