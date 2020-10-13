<!-- LISTADOS DE SUGERENCIAS APROBADAS -->
<?php include 'header.php' ?>
<?php
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "practica5");
	$consulta = "SELECT codigo, motivo, tipoUsuario, descripcion FROM sugerencias WHERE aprobado = 'Aprobada'";
	$resultado = mysqli_query($conexion, $consulta); 
	$numFilas = mysqli_num_rows($resultado);
	
	mysqli_close($conexion);
?>
<!-- BUSCADOR DE SUGERENCIAS -->
<main>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="mt-5">Búsqueda rápida de sugerencias:</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 margform">
				<form action="busqueda.php" method="post">
					<div class="form-group">
						<input type="text" name="codigo" placeholder="Introduce el codigo de tu sugerencia" class="form-control">
					</div>
					<input type="submit" class="btn btn-dark" value="Buscar sugerencia">
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="mt-5">Listado de sugerencias aprobadas</h2>
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
</main>
        

<?php include 'footer.php' ?>