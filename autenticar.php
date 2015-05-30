<?php
    include "conexion.php";
    
    
    
    $consulta= 'SELECT * FROM usuarios WHERE usuario = "'.$_POST['usuario'].'";';
    
    $resultado= mysqli_query($conexion,$consulta);
    $registro= mysqli_fetch_array($resultado);
    

    
    if($registro['pass']== $_POST['pass']){
        session_start();
        $_SESSION['usuario']=$registro['usuario'];
        if($_POST['check'] == 'yes'){
            setcookie("_coockie",$registro['usuario'],time() + 1000000);
        }
        header("Location:index.php");
    }
    
    else{
        
        header("Location:login.php?error=1");
        
    }
?>