<html>
<head>
    <link rel="stylesheet" type="text/css" href="content/css/miestilo1.css">
</head>
<?php require_once('comunes/cabecera.php'); ?>
<body>


  
   <nav class="navbar navbar-expand-lg navbar-light bg-danger d-flex flex-direction-column justify-content-around">

        <div>
        <img src="content/imagenes/logo.jpg" alt="" style="width:80px; height:60px; border-radius:15px;">
        </div>

        <div>
        <label class="navbar-brand text-dark font-weight-bold p-3">Residentes</label>
        </div>
        
        <button class="navbar-toggler bg-light border border-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <?php require_once('comunes/menu.php'); ?>
        
  </nav>



<div class="container rounded-bottom shadow-lg mb-5 bg-white rounded"style="padding: 0px 20px 15px 20px; opacity: 0.80; position: relative; top:30px;">
<div><h4 class="bg-warning text-center text-dark p-1 rounded font-weight-bold">GESTION DE RESIDENTES</h4></div>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="dptn">
        <div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
            <form method="post" action="" id="fptn">

                <div class="row">
                    <div class="col-sm-6">
                       <label class="text-dark font-weight-bold" for="pnombre">Primer Nombre:</label>
                       <input class="form-control border border-dark" type="text" id="pnombre" name="piso" />
                       <span id="spiso"></span>
                    </div>
                    <div class="col-sm-6">
                       <label class="text-dark font-weight-bold" for="snombre">Segundo Nombre:</label>
                       <input class="form-control border border-dark" type="text" id="snombre" name="piso" />
                       <span id="spiso"></span>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-sm-6">
                       <label class="text-dark font-weight-bold" for="apellidop">Apellido Paterno:</label>
                       <input class="form-control border border-dark" type="text" id="apellidop" name="piso" />
                       <span id="spiso"></span>
                    </div>
                    <div class="col-sm-6">
                       <label class="text-dark font-weight-bold" for="apellidom">Apellido Materno:</label>
                       <input class="form-control border border-dark" type="text" id="apellidom" name="piso" />
                       <span id="spiso"></span>
                    </div>
                </div>

              
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                       <label class="text-dark font-weight-bold" for="residentes">Condicion Residencial:</label>
                       <select class="form-control" id="residentes">
                           <option value="0">Propietario</option>
                           <option value="1">Copropietario</option>
                           <option value="1">Inquilino</option>
                       </select>
                    </div> 
                    <div class="col-sm-5">
                       <h6 class="text-dark font-weight-bold">Sexo</h6>
                       <label class="text-dark" id="sexo1">Hombre</label>
                       <input type="radio" class="m-2 border border-dark" id="sexo1" name="radio1" />
                       <label class="text-dark" id="sexo2">Mujer</label>
                       <input type="radio" class="m-2 border border-dark" id="sexo2" name="radio1" />
                    </div>
                   
                </div>
                
            </form>
        </div> <!-- fin de container -->
      </div>
      
      
    </div><!--fin del los contenedores-->
        <div class="row">
            <div class="col">
                <hr/>
            </div>
        </div>

        <div class="d-flex justify-content-around" style="flex-wrap: wrap;">
    
                   <button type="button" class="btn btn-danger font-weight-bold m-1 p-2" id="incluir" name="incluir">INCLUIR</button>
            
                   <button type="button" class="btn btn-danger font-weight-bold m-1 p-2" id="consultar" name="consultar">CONSULTAR</button>
            
                   <button type="button" class="btn btn-danger font-weight-bold m-1 p-2" id="modificar" name="modificar">MODIFICAR</button>
            
                   <button type="button" class="btn btn-danger font-weight-bold m-1 p-2" id="eliminar" name="eliminar">ELIMINAR</button>
            </div>
        </div>

</body>
</html>