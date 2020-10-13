<?php include 'header.php' ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="mt-5 text-center">Buzón de sugerencias</h1>
      <p class="lead text-center">Por favor, anota el código de la sugerencia. Es la única forma que tienes para poder realizar un seguimiento.</p>
      <p class="lead text-center"><a href="listadoaprobadas.php">Ver listado de sugerencias aprobadas</a></p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form action="confirmar.php" method="post" class="form-group" id="formulario">
        <label>Nombre: <span class="text-danger">(opcional)</span></label>
        <input type="text" name="nombre" id="nombre" class="form-control" >
        <p class="text-danger" id="texto"></p>
        <label>E-mail: <span class="text-danger">(opcional)</span></label>
        <input type="text" name="email" id="email" class="form-control">
        <p class="text-danger" id="texto1"></p>
        <label>Teléfono: <span class="text-danger">(opcional)</span></label>
        <input type="text" name="telefono" id="telefono" class="form-control">
        <p class="text-danger" id="texto2"></p>
        <label>Motivo</label>
        <select class="form-control" name="motivo" id="motivo">
          <option></option>
          <option>Instalaciones</option>
          <option>Producto</option>
          <option>Servicio</option>
          <option>Calidad de servicio</option>
          <option>Otros</option>
        </select>
        <p class="text-danger" id="texto3"></p>
        <br>
        <label>Tipo de usuario</label>
        <select class="form-control" name="tipos" id="usuario">
          <option></option>
          <option>Empleado/a</option>
          <option>Alumnos</option>
          <option>Clientes</option>
          <option>Proveedores</option>
          <option>Colaboradores</option>
        </select>
        <p class="text-danger" id="texto4"></p>
        <br>
        <label>Descripción</label>
        <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
        <p class="text-danger" id="texto5"></p>
        <label>Repercusión</label>
        <textarea class="form-control" name="repercusion" id="repercusion" rows="3"></textarea>
        <p class="text-danger" id="texto6"></p>
        
        <input type="submit" name="buzon" class="btn btn-dark margboton" value="Enviar sugerencia">
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>