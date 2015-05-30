<?php
    include "sesion.php";
    include "conexion.php";
        


?>

<html>
    <head>

    <link rel="stylesheet" type="text/css" href="css/login.css">
            
    </head>
    <body>
    <div class="caja">
        <form id="cajax">
            
            <img src="imagenes/logo.png" height=80 width=100><br>
            <h4>
            <?php
                echo "Usuario: ";
                echo $_SESSION["usuario"];
            ?>
            </h4>
            <br><a href="index.php"> <img src="botones/volver.png"></a>
            <br><img src="imagenes/logo.png" height=80 width=100>
            <br><img src="imagenes/logo.png" height=80 width=100>
                
            
        </form>
    </div>
    <div class="container">
        <form id="signup" action="registrar.php" method="post">
        
            <h1>Gato Video</h1>
            <h2>Configuracion de Cuenta</h2>

            <div class="sep"></div>
            <div class="inputs">

            
               
            </div>
                            <?php
                    $consulta= 'SELECT * FROM usuarios WHERE usuario = "'.$_SESSION['usuario'].'";';
    
                    $resultado= mysqli_query($conexion,$consulta);
                    $registro= mysqli_fetch_array($resultado);
                    echo '<h4>Usuario: </h4>'.$registro['usuario'].'<br>';
                    echo '<h4>Nombre: </h4>'.$registro['nombre'].'<br>';
                    if($registro['apellidop']==''){
                        echo '<h4>Apellido paterno: </h4>'.'No espesificado'.'<br>';
                    }
                    else{
                       echo '<h4>Apellido paterno: </h4>'.$registro['apellidop'].'<br>'; 
                    }
                     if($registro['apellidom']==''){
                        echo '<h4>Apellido materno: </h4>'.'No espesificado'.'<br>';
                    }
                    else{
                       echo '<h4>Apellido materno: </h4>'.$registro['apellidom'].'<br>'; 
                    }
                    
                ?>
        </form>
            <div class="cajaabajo">
        <form id="abajo">
           

                Teeeeeeeextoooooooooooooooooooooooooooooo
        </form>
    </div>
    </div>
    <div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br>
         Gato video       
       
        
    </div>
    </body>
</html>