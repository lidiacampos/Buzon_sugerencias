<?php include 'header.php'; ?>
<?php 

try {
$codigo = $_REQUEST['codigo'];
$justificacion = $_REQUEST["justificacion"];


$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "practica5");

mysqli_query($conexion, "UPDATE sugerencias SET aprobado = 'Rechazada', justificacion = '$justificacion' WHERE codigo = '$codigo'");
}
 catch (Exception $e) {
	die();
}
mysqli_close($conexion);
?>
<main>
	<div class="container">
	    <div class="row">
	      <div class="col-lg-12 text-center">
	        <h1 class="mt-5">El formulario <?php echo($codigo); ?> se ha rechazado con éxito</h1> 
			<a href="buzon.php"><input type="submit" name="volver" value="Volver" class="btn btn-dark margboton"></a>
			</div>
		</div>
	</div> 
</main>

<?php include 'footer.php'; ?>