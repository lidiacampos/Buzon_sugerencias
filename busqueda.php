<?php include 'header.php'?>

<?php

$codigo = $_REQUEST["codigo"];
$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "practica5");
$consulta = "SELECT * FROM sugerencias WHERE codigo = '". $codigo ."'";
$resultado = mysqli_query($conexion, $consulta);
$numFilas = mysqli_num_rows($resultado);

if($numFilas == 0){
	header('location: error.php');
}
mysqli_close($conexion);
?>
<div class="container">
	    <div class="row">
	      <div class="col-lg-12 text-center">
	        <h1 class="mt-5">Sugerencia encontrada:</h1> 
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
				      <th scope="row"><?php echo($codigo);?></th>
				      <td><?php echo ($rejilla['motivo']);  ?></td>
				      <td><?php echo ($rejilla['tipoUsuario']);  ?></td>
				      <td><?php echo ($rejilla['descripcion']);  ?></td>
				    </tr>
					<?php } ?>
				  </tbody>
				</table>
				
			</div>
		</div>
		<div class="row">
	    	<div class="col-lg-12 text-center">
	    		<a href="home.php"><input type="submit" name="volver" value="Volver atrás" class="btn btn-dark margboton"></a>
			</div>
		</div>
	</div> 


<?php include 'footer.php'?>