<?php
include "./connection.php";
// ...validaciones..
//Restringir el tamaño de la foto
if($_FILES["imagen"]["size"]>200000){
 		echo "Solo se permiten archivos menores de 2MB <br>";
 		echo "<a href='../misitio.php'>Volver</a>";
 		exit;
 	}
 	//Revisa si ya existe
	if (file_exists($destination)) {
		echo "Ya existe";
	}
// insertarlo en la base de datos && mover la imagen de sitio
//$_FILES[index[index][name]
//basename
$titulo = $_REQUEST['titulo'];
$destination = "fotos/".basename($_FILES['imagen']['name']);
$fecha = $_REQUEST['fecha'];



if(move_uploaded_file($_FILES['imagen']['tmp_name'], "../".$destination)){ //movemos el archivo
	
	//insertamos en la base de datos
	mysqli_query($conn, "INSERT INTO tbl_gallery (name, ruta, date, id_usuario) VALUES ('$titulo','$destination','$fecha','4')");


	header("Location: ../misitio.php");

}else{
	echo "Error!!!";
	echo "<a href='../index.php'> HOME </a>";
}





?>