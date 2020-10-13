<!-- INICIO DE SESION DEL ADMIN -->
<?php include 'header.php' ?>
<?php 

	$usuario = $_REQUEST['usuario'];
	$password = $_REQUEST['password'];

	$conexion = mysqli_connect("localhost", "root", ""); //CONECTA CON LA BASE DE DATOS

	mysqli_select_db($conexion, 'practica5'); //SELECCIONA LA BASE DE DATOS

	$consulta = mysqli_query($conexion, "select * from usuarios"); //CONSULTA LA BASE DE DATOS

	$filas = mysqli_num_rows($consulta); //SACA LAS FILAS

	for ($i=0; $i < $filas ; $i++) { 
		$fila = mysqli_fetch_array($consulta);
		if (($fila['usuario']==$usuario) && ($fila['password'] == $password)) {
			header('location:buzon.php');
			return; //pendiente de explicacion por alejandro
		}else
		{
			header('location:error.php');
		}
	}
	
 ?>

<?php include 'footer.php' ?>