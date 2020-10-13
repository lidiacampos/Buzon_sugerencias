<!-- FORMULARIO DE APROBADAS -->
<?php include 'header.php' ?>

<?php
	$codigo = $_REQUEST['codigo'];
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "practica5");
	$consulta = "SELECT codigo, motivo, tipoUsuario, descripcion FROM sugerencias WHERE codigo='$codigo'";
	$resultado = mysqli_query($conexion, $consulta); 
	$numFilas = mysqli_num_rows($resultado);
	
	mysqli_close($conexion);
?>

<div class="container">
	    <div class="row">
	      <div class="col-lg-12 text-center">
	        <h1>Panel de gestión de Sugerencias Aprobadas</h1> 
	      </div>
	     </div>
	     <div class="row">
	      <div class="col-lg-12 text-left">
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				    	<th scope="col">Código</th>
				        <th scope="col">Motivo</th>
				        <th scope="col">Usuario</th>
				        <th scope="col">Descripción</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		for($i =0; $i< $numFilas; $i++){
							$rejilla =mysqli_fetch_array($resultado);
				  	?>
				    <tr>
				      <th scope="row"><?php echo($rejilla['codigo']);?></th>
				      <td><?php echo ($rejilla['motivo']);  ?></td>
				      <td><?php echo ($rejilla['tipoUsuario']);  ?></td>
				      <td><?php echo ($rejilla['descripcion']);  ?></td>
				    </tr>
					<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>

	</div> 

<hr>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Formulario de Aprobación:</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 text-center margform">

			<form action="gestionar.php" method="get" class="form-group">
				<label>Código del formulario: </label>
				<input type="text" readonly name="codigo" class="form-control" value="<?php echo ($codigo); ?>">
				
				<label>Recursos económicos</label>
				<input type="text" name="economicos" class="form-control">
				<label>Coste Personal</label>
				<input type="text" name="costePersonal" class="form-control">
				<label>Coincidencia de filosofía</label>
				<input type="text" name="filosofia" class="form-control">
				<label>Viabilidad</label>
				<input type="text" name="viabilidad" class="form-control">
				<label>Repercusión</label>
				<textarea name="repercusion" class="form-control"></textarea>
				
				<input type="submit" name="gestionar" value="Gestionar" class="btn btn-outline-light margboton">
			</form>
			<br>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>