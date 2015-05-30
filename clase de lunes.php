<?php

    include "conexion.php";
    
    $consulta='select * from ususarios where email="'.$POST["email"].'";';
    
    $resultado=mysqli_qery($conexion,$consulta);
    $registro=mysqli_fetch_array($resultado);
    
    if($registro['password']==$_POST['pass']){
        session_start();
        $_SESSION['usuario']=$registro['nombre'];
        header("Location:bienvenido.php");
    }
    
    else{
        header("Location:login.php?error=3");
        
    }

?>