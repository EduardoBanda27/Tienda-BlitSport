<html>
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
                      <a class="nav-link active underline" href="carrito.php">Catalogo <span class="sr-only">(current)</span></a>
                      <a class="nav-link active underline" href="contact.php">Contacto <span class="sr-only">(current)</span></a>
                      <a class="nav-link active underline" href="login.html">Login <span class="sr-only">(current)</span></a>
                      <a class="nav-link active underline" href="mostrarCarrito.php">Carrito<span class="sr-only">(current)</span></a>
                      <a class="nav-link active underline" href="detalle de producto.html">Detalle de producto<span class="sr-only">(current)</span></a>
			            </div>
			          </div>
		      </nav>
	</header>
<div class="h-login">
       <div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h4>Contacto</h4>
			</div>

	<div class="form-group">
		  <label for="formGroupExampleInput">Name and Surmane</label>
		  <input type="text" class="login-label" id="formGroupExampleInput" placeholder="Name and Surname" required name="name">
		</div>	
		<div class="form-group">
		  <label for="exampleInputEmail1">Email address</label>
		  <input type="email" class="login-label" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required name="email">
		  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1" class="form-label">Message</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
		  </div>
		
		<button type="submit" class="btn btn-primary center-flex">Submit</button>
	</div>
       
		</div>
	</div>
   
<footer>
  <?php include "templates/pie.php"; ?>
 </footer>
</body>
</html>