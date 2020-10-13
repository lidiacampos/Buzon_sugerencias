<?php include 'header.php' ?>

  <!-- Top content -->
        <div class="top-content">
          <div class="container">

        <div class="row">
          <div class="col-sm-12 text wow fadeInLeft">
            <h1>Bienvenido a Ni Se Sabe. SL</h1>
            <div class="description">
              <p class="medium-paragraph">
                Esta es la web de la empresa Ni se sabe S.L. ¡Anímate! ¡Envíanos tu sugerencia!
              </p>
            </div>
          </div>
        </div>
                
      </div>
  </div>

  <!-- BUSCADOR DE SUGERENCIAS -->

        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="mt-5">Búsqueda rápida de sugerencias:</h2>
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
        
          <!-- Features -->
        <div class="features-container section-container">
          <div class="container">
            
              <div class="row">
                  <div class="col-sm-12 features section-description wow fadeIn">
                      <h2>Lo sabemos todo de ti, pero tú de nosotros no.</h2>
                      <div class="divider-1"><div class="line"></div></div>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-sm-6 features-box wow fadeInLeft">
                    <div class="row">
                      <div class="col-sm-3 features-box-icon">
                        <i class="fas fa-user-edit"></i>
                      </div>
                      <div class="col-sm-9">
                        <h3><a href="login.php">Inicio de sesión</a></h3>
                          <p>
                            Accede con tu usuario y contraseña al panel de administración de sugerencias enviadas.
                          </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 features-box wow fadeInLeft">
                    <div class="row">
                      <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-paper-plane"></i>
                      </div>
                      <div class="col-sm-9">
                        <h3><a href="#">Contacto</a></h3>
                          <p>
                            Contacta con nosotros, si es que puedes.
                          </p>
                      </div>
                    </div>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-sm-6 features-box wow fadeInLeft">
                    <div class="row">
                      <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-list-alt"></i>
                      </div>
                      <div class="col-sm-9">
                        <h3><a href="listadoaprobadas.php">Listado de sugerencias</a></h3>
                          <p>
                            Échale un vistazo a las sugerencias enviadas y aprobadas.
                          </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 features-box wow fadeInLeft">
                    <div class="row">
                      <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-edit"></i>
                      </div>
                      <div class="col-sm-9">
                        <h3><a href="sugerencias.php">Buzón de sugerencias</a></h3>
                          <p>
                            Envíanos tu sugerencia. Puede que la tengamos en cuenta, quién sabe.
                          </p>
                      </div>
                    </div>
                  </div>
              </div>

          </div>
        </div>


<?php include 'footer.php' ?>