<!DOCTYPE html>
<html lang="en">
<head>
        <title>BlitSport</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jslogin.js" type="text/javascript"></script>
        <spring:url value="/JS/jquery-1.12.3.min.js" var="js" /> 
        <link href="login.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.3.min_1.js" type="text/javascript"></script>
          <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"/>
        <link href="Css.css" rel="stylesheet" type="text/css"/>
        <script src="agregarusuario.js" type="text/javascript"></script>
        <link href="div.css" rel="stylesheet" type="text/css"/>
      <link href="style-1.css" rel="stylesheet" type="text/css"/>
        <script src="lib.js" type="text/javascript"></script>
 
    </head>
  
    <body>
         <!-- navbar -->
 <header>
	<nav class="navbar navbar-expand-lg navbar-custom ">
    <a class="navbar-brand" href="index.html">
       <img src="https://cdn.glitch.com/acb272d3-62f0-4f6b-811c-9555ba4d6893%2FLOGO.jpg?v=1616303383233" width="70" height="70" class="d-inline-block align-top" alt="">
        </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			     <span class="navbar-toggler-icon"></span>
			       </button>
			          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
			            <div class="navbar-nav">
                    <a class="nav-link active underline" href="index.html">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link active underline" href="index.php">Area de compra<span class="sr-only">(current)</span></a>
                    <a class="nav-link active underline" href="contact.html">Contacto <span class="sr-only">(current)</span></a>
                    <a class="nav-link active underline" href="login.html">Perfil <span class="sr-only">(current)</span></a>
                    <a class="nav-link active underline" href="mostrarCarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>)<span class="sr-only">(current)</span></a>
                    <a class="nav-link active underline" href="detalle de producto.html">Catalogo <span class="sr-only">(current)</span></a>
      	          </div>
			          </div>
		      </nav>
	</header>
      