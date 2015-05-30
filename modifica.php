<?php
    include "sesion.php";
    include "conexion.php";
     $consulta='UPDATE usuarios SET email="'.$_POST['email'].'" WHERE usuario="'.$_SESSION['usuario'].'";';
     $validacion = mysqli_query($conexion,$consulta);
     $consulta2='UPDATE usuarios SET nombre="'.$_POST['nombre'].'" WHERE usuario="'.$_SESSION['usuario'].'";';
     $validacion2 = mysqli_query($conexion,$consulta2);
     $consulta3='UPDATE usuarios SET apellidop="'.$_POST['apellidop'].'" WHERE usuario="'.$_SESSION['usuario'].'";';
     $validacion3 = mysqli_query($conexion,$consulta3);
     $consulta4='UPDATE usuarios SET apellidom="'.$_POST['apellidom'].'" WHERE usuario="'.$_SESSION['usuario'].'";';
     $validacion4 = mysqli_query($conexion,$consulta4);
     $consulta5='UPDATE usuarios SET pais="'.$_POST['pais'].'" WHERE usuario="'.$_SESSION['usuario'].'";';
     $validacion5 = mysqli_query($conexion,$consulta5);
     header("Location: perfil.php");
?>