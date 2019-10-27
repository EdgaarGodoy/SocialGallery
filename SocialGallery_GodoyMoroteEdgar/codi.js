function login(){
	var name = document.getElementById('name').value;
	var pass = document.getElementById('pass').value;

	if (name == '' && pass=='') {
			document.getElementById('mensaje').innerHTML = 'Todos los campos son obligatorios!';
			document.getElementById('mensaje').style.display = 'block';
			document.getElementById('name').style.border = '2px solid red';
			document.getElementById('pass').style.border = '2px solid red';
			return false;
	}else if (name == '') {
			document.getElementById('mensaje').innerHTML = 'El campo name es obligatorio!';
			document.getElementById('mensaje').style.display = 'block';
			document.getElementById('name').style.border = '2px solid red';
			return false;
	}else if (pass=='') {
			document.getElementById('mensaje').innerHTML = 'El campo password es obligatorio!';
			document.getElementById('mensaje').style.display = 'block';
			document.getElementById('pass').style.border = '1px solid red';
			
	}
}


	//Tercera validacion
	function paginap(){
		var titulo = document.getElementById('titulo').value;
	var imagen = document.getElementById('imagen').value;

	if (titulo == '' && imagen == '') {
		document.getElementById('mensaje').innerHTML = 'El campo titulo y imagen son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #FF0000';
		document.getElementById('imagen').style.border = '1px solid #FF0000';
		return false;
	}else if(titulo == ''){
		document.getElementById('mensaje').innerHTML = 'El campo titulo es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #FF0000';
		document.getElementById('imagen').style.border = '1px solid #ccc';
		return false;
	}else if(imagen == ''){
		document.getElementById('mensaje').innerHTML = 'El campo imagen es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #ccc';
		document.getElementById('imagen').style.border = '1px solid #FF0000';
		return false;
	}else{
		return true;
	}
}