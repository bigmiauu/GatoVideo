<?php
    include "sesion.php";
    include "conexion.php";
    $consulta= 'DELETE FROM usuarios WHERE usuario = "'.$_SESSION['usuario'].'";';
    $resultado= mysqli_query($conexion,$consulta);
    include "cierra.php";
?>