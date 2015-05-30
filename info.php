<?php
        include "conexion.php";
	$consulta2= 'SELECT * FROM peliculas WHERE id="'.$_GET['id'].'";';
	$regresa2 = mysqli_query($conexion,$consulta2);
	$reg = mysqli_fetch_array ($regresa2);
        
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <head></head>
    <table>
        <tr>
            <td bgcolor="white">
<?php
echo '<big>'.$_GET['nombre'].'</big>';
echo '<br><br>';
echo '<img src="pic/'.$_GET['id'].'.jpg"height=120 width=100>';
echo '<br><br>';
echo '<a href="video.php?videoid='.$_GET['id'].'">Click aqui para ver<br>"'.$_GET['nombre'].'"</a>';
?>
            </td>
            <td bgcolor="black">
                <p style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Triler</p>
<iframe width="320" height="220"
<?php echo 'src="http://www.youtube.com/embed/'.$reg['triler'].'">'; ?>
</iframe>
            </td>
        </tr>

    </table>
</html>