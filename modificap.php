<?php
    include "sesion.php";
    if($_POST['pass']!=$_POST['pass2']){
        header("Location: cambiop.php?error=1");
    }
    else{
    include "conexion.php";
     $consulta='UPDATE usuarios SET pass="'.$_POST['pass'].'" WHERE usuario="'.$_SESSION['usuario'].'";';
     $validacion = mysqli_query($conexion,$consulta);

     header("Location: perfil.php");
     }
?>