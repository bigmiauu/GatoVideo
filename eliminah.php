<?php
    include "sesion.php";
    include "conexion.php";
    $consulta= 'DELETE FROM historial WHERE usuario = "'.$_SESSION['usuario'].'";';
    $resultado= mysqli_query($conexion,$consulta);
    header("Location: historial.php?mensaje=1");
?>