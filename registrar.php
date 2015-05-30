<?php
if(($_POST['pass']) === ($_POST['passo'])){
    

if(!isset($_POST['check'])){
    header("Location: registra.php?error=3");
}
if($_POST['check'] == 'yes'){
    include "conexion.php";
     $consulta='insert into usuarios values ("'.$_POST['usuario'].'","'.$_POST['email'].'","'.$_POST['pass'].'","'.$_POST['nombre'].'","'.$_POST['apellidop'].'","'.$_POST['apellidom'].'","'.$_POST['pais'].'");';
     $validacion = mysqli_query($conexion,$consulta);
     if(!$validacion){
        $error=mysqli_errno($conexion);
        if($error==1062){
            header("Location: registra.php?error=2");
        }
     }
    else{

        header("Location: index.php"); 
    }
}
}
else{
    header("Location: registra.php?error=1");
}
?>