<?php include 'header.php'; ?>
<?php 

try {

$nombre = $_REQUEST["nombre"];
$email = $_REQUEST["email"];
$telefono = $_REQUEST["telefono"];
$motivo = $_REQUEST["motivo"];
$tipos = $_REQUEST["tipos"];
$descripcion = $_REQUEST["descripcion"];
$repercusion = $_REQUEST["repercusion"];
//Generar codigo aleatorio

$valores = ['a','b','c','d','1','2','3','4','5','6','7'];
$clave= '';
$resultado = '';
$valor = 0;

while($valor<8){
	$clave= $valores[rand(1,10)];
	$resultado = $resultado . $valores[rand(1,10)];
	$clave='';
	$valor++;
}


$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "practica5");

mysqli_query($con,"INSERT INTO sugerencias(codigo, nombre, email, telefono, tipoUsuario, motivo, descripcion, repercusion, fecha, aprobado) VALUES ('$resultado' , '$nombre', '$email', '$telefono', '$tipos', '$motivo' , '$descripcion' , '$repercusion', now(), 'Pendiente')");
//now() recoge como valor la hora y fecha actuales

}
 catch (Exception $e) {
	die();
}
mysqli_close($con);
?>

<div class="container">
	    <div class="row">
	      <div class="col-lg-12 text-center">
	        <h1 class="mt-5">Su formulario se ha enviado con éxito</h1> 
			<h3>Su codigo de formulario es: <?php echo($resultado); ?> .Le aconsejamos que lo guarde.</h3>
			<a href="home.php"><input type="submit" name="volver" value="Volver atrás" class="btn btn-dark margboton"></a>
			</div>
		</div>

	</div> 



<?php include 'footer.php'; ?>