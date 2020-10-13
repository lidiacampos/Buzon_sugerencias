<?php include 'header.php' ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="mt-5 text-center">Inicio de sesión</h1>
        <p class="lead text-center">Para poder Iniciar sesión se debe completar todos los campos</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-left">
        <form action="iniciosesion.php" method="post" class="form-group">
          <label>Usuario o email</label>
          <input type="text" name="usuario" class="form-control">
          <br>
          <label>Contraseña</label>
          <input type="password" name="password" class="form-control">
          <br>
          <br>
          <input type="submit" name="" class="btn btn-dark" value="Inicio sesión">
        </form>
      </div>
      <div class="col-md-6">
        <img src="assets/img/login.png" alt="imglogin" class="img-fluid imglogin" >
      </div>
    </div>
  </div>

</main>



<?php include 'footer.php' ?>