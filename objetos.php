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
          <div class="col-sm-12">
            <div class="card draggable-header">
              <!--<div class="card-header">
                Featured
                <button type="button" id="sidebarCollapse" class="btn btn-link move">
                  <span class="oi oi-move"></span>
                </button>
              </div>-->
              <div class="card-body">
                <h4 class="card-title">Objetos</h4>
                <form>

                  <div class="form-group" style="position: absolute;">
                    <label for="exampleInputEmail1">Código:</label>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
                    <input type="text" class="form-control" id="código"  disabled="disabled" style="width: 250%;">
                  </div>
                  <div class="form-group" style="padding-left: 50%;">
                    <label for="exampleInputEmail1">Creado por:</label>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
                    <input type="text" class="form-control" id="creador"  disabled="disabled" style="width: 100%;">
                  </div>

                  <div class="form-group" style="position: absolute;">
                    <label for="exampleInputEmail1">Nombre:</label>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
                    <input type="text" class="form-control" id="nombre"  placeholder="Nombre Objeto" style="width: 250%;">
                  </div>
                  <div class="form-group" style="padding-left: 50%;">
                    <label for="exampleInputEmail1">Tipo de Objeto:</label>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
                    <select class="form-control" style="width: 100%;">
                      <option value="">Seleccione...</option>
                      <option value="textBox">TextBox</option>
                      <option value="comboBox">ComboBox</option>
                      <option value="checkBox">CheckBox</option>
                      <option value="radioButton">RadioButton</option>
                      <option value="label">Label</option>
                      <option value="button">Button</option>
                      <option value="link">Link</option>
                      <option value="image">Image</option>
                      <option value="webService">WebService Field</option>
                    </select>
                  </div>

                  <div class="form-group" style="position: absolute;">
                    <label for="exampleInputEmail1">Tipo de Dato:</label>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
                    <select class="form-control" style="width: 335%;">
                      <option value="">Seleccione...</option>
                      <option value="texto">Texto</option>
                      <option value="numérico">Numérico</option>
                      <option value="alfanumérico">Alfanumérico</option>
                      <option value="email">Email</option>
                      <option value="sino">Si/No</option>
                      <option value="moneda">Moneda</option>
                      <option value="data">Data</option>
                      <option value="na">NA</option>
                    </select>
                  </div>
                  <div class="form-group" style="padding-left: 50%;">
                    <label for="exampleInputEmail1">Attach:</label>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
                    <input type="text" class="form-control" id="attach"  placeholder="Attach Objeto" style="width: 100%;">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripción:</label>
                    <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
                    <textarea rows="4" cols="50" class="form-control">
                       
                    </textarea>
                  </div>
                  <!--<div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Check me out
                    </label>
                  </div>-->
                  <button type="submit" class="btn btn-primary">Copiar</button>
                  <button type="submit" class="btn btn-primary">Nuevo</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <!--<div class="card-header">
                Featured
              </div>-->
              <div class="card-body">
                <h4 class="card-title">Listado de objetos creados</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
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