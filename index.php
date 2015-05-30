<?php
    if(isset($_COOKIE['_coockie'])){
	session_start();
	$_SESSION['usuario']=$_COOKIE['_coockie'];
    }
    else{
	include "sesion.php";
    }
    
    include "conexion.php";
    
?>

<html >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<head>
    <link href="themes/2/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/2/tooltip.js" type="text/javascript"></script>
    
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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

</style>
</script>
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
<h2>Inicio</h2>
<img src="images/logo.png" height=90 width=90>
   

</div>

<section>
    
<div id="content">
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
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="cierra.php" class="perfil">Cerrar sesion</a>
    </font></big>
</aside>
<div class="left"> 
<div class="right">
    <?php
	setlocale(LC_ALL,"es_ES");
echo strftime("%d de %B");
    ?>
</div>
<h2>Lo mas reciente</h2>
 
<div class="articles">
    
    <?php
    $consulta= 'SELECT * FROM peliculas;';
    $regresa = mysqli_query($conexion,$consulta);
    $numero = mysqli_num_rows($regresa);
    $ultimas = $numero - 2;
    for($i=$ultimas;$i<=$numero;$i++){
    $consulta2= 'SELECT * FROM peliculas WHERE id="'.$i.'";';
	$regresa2 = mysqli_query($conexion,$consulta2);
	$reg = mysqli_fetch_array ($regresa2);
	echo '<a class="tooltip" onclick="return false; href="video.php?videoid='.$i.'" onmouseover="tooltip.ajax(this, \'info.php?id='.$i.'&nombre='.$reg["titulo"].'\');" ><img class="marco2" src="pic/'.$i.'.jpg" height=250 width=180></a>';

    }
    
    ?>
    
    
        
</div>
<h2>Todas</h2>
 
<div class="articles">
    
    <?php
    $consulta= 'SELECT * FROM peliculas;';
    $regresa = mysqli_query($conexion,$consulta);

    $numero = mysqli_num_rows($regresa);
    $ultimas = $numero - 2;
    for($i=1;$i<=$numero;$i++){
	$consulta2= 'SELECT * FROM peliculas WHERE id="'.$i.'";';
	$regresa2 = mysqli_query($conexion,$consulta2);
	$reg = mysqli_fetch_array ($regresa2);
	echo '<a class="tooltip" onclick="return false; href="video.php?videoid='.$i.'" onmouseover="tooltip.ajax(this, \'info.php?id='.$i.'&nombre='.$reg["titulo"].'\');" ><img class="marco2" src="pic/'.$i.'.jpg" height=250 width=180></a>';


	//echo '.$reg["titulo"].';
    }
    
    ?>
    
    
        
</div>

    

    



<!--<h2><a href="#">Title with a link - Example of heading 2</a></h2>
<div class="articles">
Donec nulla. Aenean eu augue ac nisl tincidunt rutrum. Proin erat justo, pharetra eget, posuere at, malesuada 
et, nulla. Donec pretium nibh sed est faucibus suscipit. Nunc nisi. Nullam vehicula. In ipsum lorem, bibendum sed, 
consectetuer et, gravida id, erat. Ut imperdiet, leo vel condimentum faucibus, risus justo feugiat purus, vitae 
congue nulla diam non urna.
</div> -->
</div>

<div style="clear: both;"> </div>
</div>

</section>
<div id="footer">
<br>
<div class="fb-like" data-href="http://bigmiauu.co.nr/gatovideo" data-width="400" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<br>Diseñado por <a href="http://bigmiauu.co.nr/">AFL</a>
</div>
</div>

</body>
</html>