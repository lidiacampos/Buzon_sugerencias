<?php include 'header.php'; ?>



<?php 

try {
$codigo = $_REQUEST['codigo'];
$recursos = $_REQUEST["economicos"];
$coste = $_REQUEST["costePersonal"];
$filosofia = $_REQUEST["filosofia"];
$viabilidad = $_REQUEST["viabilidad"];
$repercusion = $_REQUEST["repercusion"];


$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "practica5");

mysqli_query($conexion, "UPDATE sugerencias SET aprobado = 'Aprobada', recursos='$recursos', coste=$coste, filosofia='$filosofia', viabilidad = '$viabilidad', efecto='$repercusion'  WHERE codigo = '$codigo'");

}
 catch (Exception $e) {
	die();
}
mysqli_close($conexion);
?>

<div class="container">
	    <div class="row">
	      <div class="col-lg-12 text-center">
	        <h1 class="mt-5">El formulario <?php echo($codigo); ?> se ha aceptado con éxito</h1> 
			<a href="buzon.php"><input type="submit" name="volver" value="Volver" class="btn btn-dark margboton"></a>
			</div>
		</div>
	</div> 

<?php include 'footer.php'; ?>