<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: right;">
		<?php
		//Mantengo la sesión. Por ende puedo utilizar la variable $_SESSION anteriormente configurada
		session_start();
		if(isset($_SESSION['name'])){
			echo "<a style='margin-right: 25px; background-color: white;' href='./services/logout.proc.php'>Cerrar sesión de ".$_SESSION['name']."</a>&nbsp;&nbsp;";
		}else{
			header("Location: ./index.php");
		}
		?>
	</div> 
</body>
</html>