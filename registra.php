<?php
     $conexion=mysqli_connect("localhost","root","","gatovideobd");
     $consulta="select * from Paises order by Pais";
     $estados = mysqli_query($conexion,$consulta);
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<head>
<title>Gato Video</title>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="wrap">

<div id="header">
<h1><a href=""index.php"">Gato Video</a></h1>
<h2>Peliculas y series en linea</h2>
</div>

<div id="intro">
<h2>Registrarse</h2>
<img src="images/logo.png" height=90 width=90>


<div id="content">
<div class="left"> 

<h2>Campos</h2>
<big><font color="red">
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]==1){
                        echo "Los password deven coincidir";
                    }
                   if($_GET["error"]==2){
                        echo "El usuario ya existe";
                    }
                    if($_GET["error"]==3){
                        echo "Usted deve aceptar los terminos y condiciones";
                    }
                }
            ?>
</font></big>	
<div class="articles">
	 
<br /><br />
<!---<img src="images/pic.jpg" alt="Example pic" style="border: 3px solid #ccc;" /> -->
<big>
    <form id="signup" action="registrar.php" method="post">
            <div class="sep"></div>
            <div class="inputs">
                Usuario: <input type="text" placeholder="Usuario" name="usuario" required autofocus /> *<br><br>
                Password: <input type="password" name="pass" placeholder="Password" required /> *<br><br>
                Repetir password: <input type="password" name="passo" placeholder="Password" required /> *<br><br>
                Correo electronico: <input type="email" placeholder="E-mail" name="email" required />  *<br><br>
                Nombre: <input type="text" placeholder="Nombre" name="nombre" required /> *<br><br>
                Apellido paterno: <input type="text" placeholder="Appelido Paterno" name="apellidop" /> <br><br>
                Apellido materno: <input type="text" placeholder="Appelido Materno" name="apellidom" /> <br><br>
                Pais:
		<select required name="pais">
		<?php
		while($registro=mysqli_fetch_array($estados)){
                echo '<option value="'.$registro['Pais'].'">'.$registro['Pais'].'</option>';
		}
		?>     
		</select>
		<br><br>
		<div class="checkboxy">
                <input name="check" id="check" value="yes" type="checkbox" /><label class="terms">Acepto las politicas de privacidad</label>
                </div>
                <br><a id="registrarse" href="registra.php">Limpiar Formulario</a><br>
		<style type="text/css">
		    .boton2 {
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
	font-size:14px;
	font-weight:bold;
	padding:5px 8px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.boton2:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.boton2:active {
	position:relative;
	top:1px;
}

		</style>
                <br><input class="boton2" type="submit" id="submit" value="Registrar"><br><br>
               
            </div>
    </form>
    <br>
</big>
    <a href="terminos.php">Terminos y condiciones</a>
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


<div id="footer">
Diseñado por <a href="http://bigmiauu.co.nr/">AFL</a>
</div>
</div>

</body>
</html>