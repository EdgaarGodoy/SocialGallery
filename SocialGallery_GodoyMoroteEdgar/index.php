<!DOCTYPE html>
<html>
<head>
	<title>Práctica</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="codi.js"></script>
</head>
<body bgcolor="C62929">
	<center><h1 style="margin-top: 5%;background-color: black; color: white; width: 40%;border-radius: 10px;"  >Galeria de Imagenes</h1></center>
<div align="center">
	<h1>Login</h1>
	<p style="color: white;" id="mensaje" class="mensaje"></p>
	<form method="post" action="./services/login.proc.php" onsubmit="return login()">
		<input type="text" name="user" id="name" placeholder="Inserta el usuario..." ><br/>
		<input type="password" name="password" id="pass" placeholder="Inserta el password" ><br/><br/>
		<input type="submit" name="Enviar">
	</form>
</div>
	<br><br>
</body>
</html>