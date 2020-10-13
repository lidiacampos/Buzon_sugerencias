<!-- LISTADOS DE SUGERENCIAS PENDIENTES DEL ADMIN-->
<?php include 'header.php' ?>
<?php
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "practica5");
	//Primera consulta Pendientes
	$consulta = "SELECT codigo, motivo, tipoUsuario, descripcion FROM sugerencias WHERE aprobado = 'Pendiente'";
	$resultado = mysqli_query($conexion, $consulta); 
	$numFilas = mysqli_num_rows($resultado);

	//Segunda consulta Rechazadas
	$consulta2 = "SELECT codigo, motivo, tipoUsuario, descripcion, justificacion FROM sugerencias WHERE aprobado = 'Rechazada'";
	$resultado2 = mysqli_query($conexion, $consulta2); 
	$numFilas2 = mysqli_num_rows($resultado2);

	//Tercera consulta Aprobadas
	$consulta3 = "SELECT codigo, motivo, tipoUsuario, descripcion, recursos, coste FROM sugerencias WHERE aprobado = 'Aprobada'";
	$resultado3 = mysqli_query($conexion, $consulta3); 
	$numFilas3 = mysqli_num_rows($resultado3);


	mysqli_close($conexion);
?>

<div class="container">
	     <div class="row">
	      <div class="col-lg-12 text-center">
	        <h1 class="mt-5">Listado de sugerencias pendientes</h1> 
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
				         <th scope="col">Aprobar</th>
				         <th scope="col">Acción</th>
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
				      <td><a href='gestion.php?codigo=<?php echo($rejilla['codigo']);?>'><input type="submit" name="aprobar" value="Aprobar" class="btn btn-success"></a></td>
				      <td><a href='rechazar.php?codigo=<?php echo($rejilla['codigo']);?>'><input type="submit" name="rechazar" value="Rechazar" class="btn btn-danger"></a></td>
				    </tr>

					<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>

	</div> 
<hr>

<!-- LISTADOS DE SUGERENCIAS APROBADAS -->

<div class="container margtabla">
	    <div class="row">
	      <div class="col-lg-12 text-center">
	        <h1 class="mt-5">Listado de sugerencias aprobadas</h1> 
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
				        <th scope="col">Recursos Económicos</th>
				        <th scope="col">Coste Personal</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		for($i =0; $i< $numFilas3; $i++){
							$rejilla3 =mysqli_fetch_array($resultado3);
				  	?>
				    <tr>
				      <th scope="row"><?php echo($rejilla3['codigo']);?></th>
				      <td><?php echo ($rejilla3['motivo']);  ?></td>
				      <td><?php echo ($rejilla3['tipoUsuario']);  ?></td>
				      <td><?php echo ($rejilla3['descripcion']);  ?></td>
				      <td><?php echo ($rejilla3['recursos']);  ?></td>
				      <td><?php echo ($rejilla3['coste']);  ?></td>
				    </tr>
					<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>

	</div> 
<hr>
<!-- LISTADOS DE SUGERENCIAS RECHAZADAS -->

<div class="container margtabla">
	    <div class="row">
	      <div class="col-lg-12 text-center">
	        <h1 class="mt-5">Listado de Sugerencias Rechazadas</h1> 
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
				        <th scope="col">Justificación</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		for($i =0; $i< $numFilas2; $i++){
							$rejilla2 =mysqli_fetch_array($resultado2);
				  	?>
				    <tr>
				      <th scope="row"><?php echo($rejilla2['codigo']);?></th>
				      <td><?php echo ($rejilla2['motivo']);  ?></td>
				      <td><?php echo ($rejilla2['tipoUsuario']);  ?></td>
				      <td><?php echo ($rejilla2['descripcion']);  ?></td>
				      <td><?php echo ($rejilla2['justificacion']);  ?></td>
				    </tr>
					<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>

	</div> 


<?php include 'footer.php' ?>