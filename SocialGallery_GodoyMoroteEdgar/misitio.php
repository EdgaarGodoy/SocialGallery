<!DOCTYPE html>
<html>
<head>
	<title>Galería de imágenes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="galeria.css">
	<script type="text/javascript" src="js/codi.js"></script>
</head>
<body style="background-image: url(./fotos/fondogaleria.jpg);">
	<div style="text-align: right;">
	<?php
	include "./header.php";
	?>	
	</div>
	<center><h1 style="margin-left: 25px; background-color: white; width: 30%; border-radius: 10px;">Sitio personal de <?php echo $_SESSION['name']; ?></h1></center>

	<!-- Formulario -->
	
	<div id="content">
		<div id="pregunta"> 
			<h2 style="margin-left: 5px;">Subir foto</h2>		
		</div>
		<p style="color: white;" id="mensaje" class="mensaje"></p>
		
	<form method="post" enctype="multipart/form-data" action="./services/processa.php" onsubmit="return paginap()">
		<input type="text" name="titulo" id="titulo" placeholder="Titulo..." >
		<br>
		<input type="file" name="imagen" id="imagen" accept="image/png, image/jpg, image/jpeg, image/gif" placeholder="Imagen" >
		<br>
		<input type="date" name="fecha" id="fecha"  placeholder="Fecha" >
		<br>
		<input type="submit" name="Enviar">
</div>

	</form>
</div>
	<br>
<?php
//Conexión a la base de datos
include "./services/connection.php";
//Seleccion y muestra de datos de la base de datos (bomitar la base de datos)
$id_user=$_SESSION['id'];
$sq="SELECT tbl_gallery.name, tbl_gallery.ruta, tbl_gallery.date FROM tbl_gallery WHERE id_usuario='$id_user'";
$result = mysqli_query($conn, $sq);
 //WHERE tbl_gallery.id_usuario='"$_SESSION['id']."'

if(!empty($result) && mysqli_num_rows($result)>0){
	//Pintame el resultado(row = fila)
	while ($row = mysqli_fetch_array($result)) {
		//Añadimos la imagen a la pagina web con la etiqueta img de HTML
		echo '<div style="background-color:#C62929;border-radius:10px; ; height:230px; width:45%;display: inline-flex;margin-right:30px;margin-left:25px;margin-bottom:50px;">'.'<img src="'.$row['ruta'].'" width=230px height=230px style="border-radius: 10px; float: left;"/>';
		//Añadimos el nombre a la pagina web con la etiqueta h2 de HTML
		echo "<ul>
      <li><b>Nombre: </b> ".$row['name']."</li><br>
      <li><b>Fecha: </b>".$row['date']."</div>";
		
	}
}else{
	echo "0 resultados";
}



?>
</body>
</html>