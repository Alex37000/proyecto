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
        <label class="navbar-brand text-dark font-weight-bold p-3">Viviendas</label>
        </div>
        
        <button class="navbar-toggler bg-light border border-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <?php require_once('comunes/menu.php'); ?>
        
  </nav>
 


<div class="container rounded-bottom shadow-lg mb-5 bg-white rounded"style="padding: 0px 20px 15px 20px; opacity: 0.80; position: relative; top:30px;">
<div><h4 class="bg-danger text-center text-white p-1 rounded font-weight-bold">GESTION DE VIVIENDA</h4></div>
<h5 class="text-center text-secondary p-1 rounded font-weight-bold">Informacion de Vivienda:</h5>
	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane active" id="dptn">
		<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
			<form method="post" action="" id="fptn">

				<div class="row">
					<div class="col-sm-4">
					   <label class="text-dark font-weight-bold" for="nroc">Nro Casa:</label>
					   <input class="form-control border border-dark" type="text" id="nroc" name="piso" />
					   <span id="spiso"></span>
					</div>
					<div class="col-sm-8">
					   <label class="text-dark font-weight-bold" for="cdg">Codigo Interno Confidencial:</label>
					   <input class="form-control border border-dark" type="text" id="cdg" name="piso" />
					   <span id="spiso"></span>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<hr/>
					</div>
				</div>
				<h5 class="text-center text-secondary p-1 rounded font-weight-bold">Direccion de Vivienda:</h5>
				<div class="row">
					<div class="col-sm-4">
					   <label class="text-dark font-weight-bold" for="avn">Avenida:</label>
					   <input class="form-control border border-dark" type="text" id="avn" name="torre" />
					</div>
					<div class="col-sm-4">
					   <label class="text-dark font-weight-bold" for="calle">Calle:</label>
					   <input class="form-control border border-dark" type="text" id="calle" name="numero" />
					</div>
					<div class="col-sm-4">
					   <label class="text-dark font-weight-bold" for="esquina">Esquina:</label>
					   <input class="form-control border border-dark" type="text" id="esquina" name="piso" />
					   <span id="spiso"></span>
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