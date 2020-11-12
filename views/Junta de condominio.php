<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="content/css/gastos.css">
</head>
<?php require_once('comunes/cabecera.php'); ?>
<body>
    <script>
    function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
    </script>

<div>
   <nav class="navbar navbar-expand-lg navbar-light bg-danger">       
        <button class="navbar-toggler bg-light border border-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
        <img src="content/imagenes/logo.jpg" alt="" style="width:80px; height:60px; border-radius:15px;">
		<label class="navbar-brand text-white font-weight-bold">Gastos</label>
		<?php require_once('comunes/menu.php'); ?>
  </nav>
</div>
<br>    
    <button class="" onclick="myFunction()">Registrar</button>
    <button class="" >Consultar</button>
    <button class="" >Modificar</button>
    <button class="" >Eliminar</button>
<div class="caja" id="myDIV">
			<div class="text">Registrar Junta de condominio</div>   <br><br>
			<label for="Concepto" class="p">Concepto</label> <input type="text" name="concepto">

			<label for="monto" class="p">Monto</label> 		<input type="number" name="monto">

			<label for="fecha" class="p">Fecha</label> 		<input type="date" name="fecha"><br><br>
			
			<label for="fecha" class="p">Recibo de pago</label>
			<span class="nuestroinput"> 
				<input type="file" name="nuestroinput" id="nuestroinput">
			</span>
			<label for="nuestroinput" ><span>Selecciona el archivo</span>
			</label> 
			<br><br>
			<label for="imagen" class="p">Moneda</label> <input type= "text">  		
 			<input type="submit" value="Enviar"> 
		</div>
</body>
    </html>