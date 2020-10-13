document.getElementById('formulario').onclick = function(){
	
	var nombre = document.getElementById('nombre').value;
	var telefono = document.getElementById('telefono').value;
	var email = document.getElementById('email').value;
	var motivo =document.getElementById('motivo').value;
	var usuario = document.getElementById('usuario').value;
	var descripcion = document.getElementById('descripcion').value;
	var repercusion = document.getElementById('repercusion').value;

		if ((nombre=='')||(nombre == null)){
			document.getElementById('texto').innerHTML = ('Rellenar campo');
			return false;
		}
		else {
			document.getElementById('texto').innerHTML = ('');
			
		}
		if ((email=='')||(email == null)){
			document.getElementById('texto1').innerHTML = ('Rellenar campo');
			return false;
		}
		else {
			document.getElementById('texto1').innerHTML = ('');
			
		}
		if(isNaN(telefono)){
			document.getElementById('texto2').innerHTML = ('No es un número');
			return false;
		}
		else if(telefono == ''){
			document.getElementById('texto2').innerHTML = ('Rellene el campo');
			return false;
		}
			else{
			document.getElementById('texto2').innerHTML = ('');
			
		}
		
		if (motivo ==''){
			document.getElementById('texto3').innerHTML = ('Rellene el campo');
			return false;
		}
		else {
			document.getElementById('texto3').innerHTML = ('');
			
		}
		if (usuario ==''){
			document.getElementById('texto4').innerHTML = ('Rellene el campo');
			return false;
		}
		else {
			document.getElementById('texto4').innerHTML = ('');
			
		}
		
		if (descripcion ==''){
			document.getElementById('texto5').innerHTML = ('Rellene el campo');
			return false;
		}
		else {
			document.getElementById('texto5').innerHTML = ('');
			
		}
		if (repercusion ==''){
			document.getElementById('texto6').innerHTML = ('Rellene el campo');
			return false;
		}
		else {
			document.getElementById('texto6').innerHTML = ('');
			
		}
		
			return true;
		
	

}