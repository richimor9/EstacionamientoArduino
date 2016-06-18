<?php

include("conexion.php"); 	

$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
header("refresh:1; url=$self"); //Refrescamos cada segundo
$con = mysql_connect($host, $user, $pw);
mysql_select_db($db, $con);

$sql="select * from cajonLog";
$datos=mysql_query($sql,$con);
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
      $cajon1=$row['cajon1']; //datos del campo nombre
      $cajon2=$row['cajon2']; //datos del campo nombre
      $cajon3=$row['cajon3']; //datos del campo nombre
      //echo "$cajon1,$cajon2,$cajon3.<br/>"; //visualizar datos
      }

/*if($cajon1==1){
echo "<br>";
echo "A1 libre";
}
else {
echo "Cajon 1 ocupado";
}
echo "<br>";
if($cajon2==1){

echo "Cajon 2 libre";

}
else {
echo "Cajon 2 ocupado";
}
echo "<br>";
if($cajon3==1){

echo "Cajon 3 libre";
}
else {
echo "Cajon 3 ocupado";
}*/
mysql_close($con);//cerrar conexion




	
?>
<html lang="es">

<head>
<style type="text/css">


table.curvedEdges { border:10px solid RoyalBlue;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
table.curvedEdges td, table.curvedEdges th { border-bottom:1px padding:5px; }
body { text-align: Center; 	
}
table, th, td {
	
    border: 3px solid black;
    padding: 5px;
}

table td {

}

table {
text-align: Center;
    border-spacing: 15px;
	
	
}
	



</style>
       
<meta charset='utf-8'>
<link rel="stylesheet" href="stylesheet.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800' rel='stylesheet' type='text/css'>
<script src='scriptprincipal.js'></script>

</head>

<body >
<div id='contenido'> 

<header>
<hgroup>
<h1>Inicio</h1>
</hgroup>

<nav>
<ul>

<li><a href='index.php'>Inicio</a></li>
<li><a href='tutoriales.html'>Riotech</a></li>
<li> <a href='contacto.html'>Contacto</a></li>
<li><a href='media.html'>Media</a></li>


</ul>
</nav>
</header>

<section>
<div id='textoPr'>
<article>
<hgroup>
<h1>Bienvenido</h1>
</hgroup>
<div style="text-align:center;">
        <h1>Estacionamiento Inteligente</h1>

<h2>PISO 1</h2>

		<table border="1" style="margin: 0 auto;"class="curvedEdges">
		<tr>
		<td 
<?php
if($cajon1==1){
echo "bgcolor=green";
}
else {
echo "bgcolor=red";
}
?>
>
        <p>A1</p>
</td>
		<td
  
<?php
if($cajon2==1){
echo "bgcolor=green";
}
else {
echo "bgcolor=red";
}
?>

>

        <p>B1</p>

</td>



		<td  

<?php
if($cajon3==1){
echo "bgcolor=green";
}
else {
echo "bgcolor=red";
}
?>
>
        <p>C1</p></td>

		
		
		
	
      
		</tr>
		</table>

		





    </div>
</article>


</div>
</section>
</div>

<footer>
<p>Visita mi <a href='https://www.youtube.com/channel/UCvTfD8zsDPSecGgxZzlkHNg'>canal de youtube</a></p>
<p>Sigueme en twitter: <a href= 'https://twitter.com/ritmoram'>@ritmoram</a></p>
</footer>




</body>
</html>