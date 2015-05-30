
<?php

    include "sesion.php";
    include "conexion.php";
        if(!isset($_GET["videoid"])){ 
        header("Location: index.php");
    }
    setlocale(LC_ALL,"es_ES");
    $id_peli= $_GET["videoid"];

    $consulta= 'SELECT * FROM peliculas WHERE id = "'.$id_peli.'";';
    
    
    
    
    
    if(!isset($_SESSION['anterior'])){
        
        
    }
    
    
    $resultado= mysqli_query($conexion,$consulta);
    $registro= mysqli_fetch_array($resultado);
    
    $inserta='insert into historial values ("'.strftime('%d de %B').'","'.$registro['id'].'","'.$_SESSION['usuario'].'");';
    $resu= mysqli_query($conexion,$inserta);
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<head>
    <script type="text/css">
	.center {
	margin: 0 auto;
	
	}

    </script>
    <style>
	.perfil {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:2px 19px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.perfil:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.perfil:active {
	position:relative;
	top:1px;
}
	.botona {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.botona:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.botona:active {
	position:relative;
	top:1px;
}
.botond {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.botond:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.botond:active {
	position:relative;
	top:1px;
}

    </style>
<title>Gato Video</title>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>

<div id="wrap">

<div id="header">
<h1><a href="index.php">Gato Video</a></h1>
<h2>Peliculas y series en linea</h2>
</div>

<div id="intro">
<h2>Video</h2>
<img src="images/logo.png" height=90 width=90>
     <aside id="header">
    <big><font color="#ffffff">
    &nbsp;
 <?php
        echo "Bienvenido ";
        echo $_SESSION["usuario"];
?>
<br>
    
    &nbsp;<a class="perfil" href="perfil.php">My perfil</a>
    <a class="perfil" href="historial.php">Mi historial</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;
    <a href="cierra.php" class="perfil">Cerrar sesion</a>
    </font></big>
</aside>
<div id="content">

<div class="left"> 
<h2>
<?php
                echo '<h3> Estas viendo: '.$registro['titulo'].'</h3>';
?>
</h2> 
 
<div class="articles">
	 
<br /><br />
<!---<img src="images/pic.jpg" alt="Example pic" style="border: 3px solid #ccc;" /> -->
<div class="center">
    &nbsp;&nbsp;
<?php
//echo '<video src="videos/'.$registro['id'].'.webm" controls autoplay height=480 width=640 >'.$registro['titulo'].' Tu navegador no soporta los formatos</video><br>';
?>


<iframe src="https://player.vimeo.com/video/124385108" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>








<br>
<a class="botona" href="javascript:void(document.body.style.backgroundColor='black')">Modo cine</a>
&nbsp;&nbsp;
<a class="botond" href="javascript:void(document.body.style.backgroundColor='white')">Modo normal</a>
</div>
<br>
</div>
<div class="center">
<div class="CSS_Table_Example" >
                <table >
                    <tr>
                         <td>
                            Titulo
                        </td>
                        <td>
                            Productor
                        </td>
                        <td >
                            Pais
                        </td>
                        <td>
                            Artistas
                        </td>
                         <td>
                            Genero
                        </td>
                        <td >
                            Duracion
                        </td>
                        <td>
                            Audio
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <?php echo $registro['titulo']; ?>
                        </td>
                        <td>
                            <?php echo $registro['productor']; ?>
                        </td>
                        <td>
                            <?php echo $registro['pais']; ?>
                        </td>
                        <td >
                            <?php echo $registro['artistas']; ?>
                        </td>
                        <td>
                            <?php echo $registro['genero']; ?>
                        </td>
                        <td>
                            <?php echo $registro['duracion']; ?>
                        </td>
                         <td>
                            <?php echo $registro['idioma']; ?>
                        </td>
                    </tr>

                </table>
            </div>  
            <div class="CSS_Table_Example" >
                <table >
                    <tr>
                         <td>
                            Descripcion
                        </td>
                    </tr>
                    <tr>
                         <td>
                            <?php echo $registro['descripcion']; ?>
                        </td>
                    </tr>
                </table>
            </div>

               
            </div>

</div>

<div style="clear: both;"> </div>
</div>


<div id="footer">
Diseñado por <a href="http://bigmiauu.co.nr/">AFL</a>
</div>
</div>

</body>
</html>