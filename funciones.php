<!doctype html>
<html lang="en">

<head>
  <title>PayC | Proyecto Automatización y Cetificación</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <style>
  </style>
</head>

<body>
  <?php 
    include 'cabecera.php';
  ?>
  <!-- Page Content Holder -->
  <div class="container-fluid wrapper">
    <div class="row flex-xl-nowrap">
      <!-- Sidebar Holder -->
      
      <?php 
        include 'menu.php';
       ?>

      <main class="py-md-3 px-md-4 sw-content" role="main" style="width: 100%;">
       
        
        <div class="row">

          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Zona de funciones</h4>
                <select id="soflow">
                  <option value="volvo">--Seleccionar--</option>
                  <option value="saab">Funcion 1</option>
                  <option value="opel">Funcion 2</option>
                  <option value="audi">Funcion 3</option>
                </select>
              </div>
            </div>

          </div>
          <div class="col-sm-3">
            <div class="row sortable unselectable">

              <div class="Tarjeta">
                <div class="card draggable1">
                  <div class="card-body Tarjeta-Cuerpo">
                        <p class="card-text">Abrir Navegador</p>
                  </div>
                </div>
              </div>

              <div class="Tarjeta">
                <div class="card draggable1">
                  <div class="card-body Tarjeta-Cuerpo">
                    <p class="card-text">Buscar / Selec Producto</p>
                  </div>
                </div>
              </div>

              <div class="Tarjeta">
                <div class="card draggable1">
                  <div class="card-body Tarjeta-Cuerpo">
                    <p class="card-text">Agregar al Carro</p>
                  </div>
                </div>
              </div>

              <div class="Tarjeta">
                <div class="card draggable1">
                  <div class="card-body Tarjeta-Cuerpo">
                    <p class="card-text">Buscar / Selec Producto</p>
                  </div>
                </div>
              </div>

              <div class="Tarjeta">
                <div class="card draggable1">
                  <div class="card-body Tarjeta-Cuerpo">
                    <p class="card-text">Comprar</p>
                  </div>
                </div>
              </div>

              <div class="Tarjeta">
                <div class="card draggable1">
                  <div class="card-body Tarjeta-Cuerpo">
                    <p class="card-text">Seleccionar Tienda</p>
                  </div>
                </div>
              </div>

              <div class="Tarjeta">
                <div class="card draggable1">
                  <div class="card-body Tarjeta-Cuerpo">
                    <p class="card-text">Ingresar Datos</p>
                  </div>
                </div>
              </div>

              <div class="Tarjeta">
                <div class="card draggable1">
                  <div class="card-body Tarjeta-Cuerpo">
                    <p class="card-text">Terminar</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        
        
        

      </main>
    </div>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./js/portal.white.js"></script>
</body>

</html> 