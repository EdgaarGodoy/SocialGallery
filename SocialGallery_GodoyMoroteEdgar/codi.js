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
		var fecha = document.getElementById('fecha').value;


		if (titulo == '' && imagen == '' && fecha == ''){
			document.getElementById('mensaje').innerHTML = 'Todos los campos son obligatorios!';
			document.getElementById('mensaje').style.display = 'block';
			document.getElementById('titulo').style.border = '2px solid red';
			document.getElementById('imagen').style.border = '2px solid red';
			document.getElementById('fecha').style.border = '2px solid red';
			return false;
		}else if(titulo == '') {
			document.getElementById('mensaje').innerHTML = 'El campo titulo es obligatorio!';
			document.getElementById('mensaje').style.display = 'block';
			document.getElementById('titulo').style.border = '2px solid red';
			return false;
		}else if(imagen == ''){
			document.getElementById('mensaje').innerHTML = 'El campo imagen es obligatorio!';
			document.getElementById('mensaje').style.display = 'block';
			document.getElementById('imagen').style.border = '2px solid red';
			return false;
		}
		else if(fecha == ''){
			document.getElementById('mensaje').innerHTML = 'El campo fecha es obligatorio!';
			document.getElementById('mensaje').style.display = 'block';
			document.getElementById('fecha').style.border = '2px solid red';
			return false;
		}else{
			return true;
		}
	}