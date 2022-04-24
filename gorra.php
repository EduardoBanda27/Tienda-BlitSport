<!DOCTYPE html>
<html lang="en"></html>
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
   <!-- PARA EL MODEL VIEWER -->
   <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
 <!--tabs-->
   <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".tab_content").hide();
    $(".tab_content:first").show(); 

    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();
        var activeTab = $(this).attr("rel"); 
        $("#"+activeTab).fadeIn(); 
    });
});
</script>
    </head>
   
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
                      <a class="nav-link active underline" href="index.php">Area de compra<span class="sr-only">(current)</span></a>
                      <a class="nav-link active underline" href="contact.html">Contacto <span class="sr-only">(current)</span></a>
                      <a class="nav-link active underline" href="login.html">Perfil <span class="sr-only">(current)</span></a>
                      <a class="nav-link active underline" href="mostrarCarrito.php">Carrito<span class="sr-only">(current)</span></a>
                      <a class="nav-link active underline" href="detalle de producto.html">Catalogo <span class="sr-only">(current)</span></a>
			            </div>
			          </div>
		      </nav>
	</header>
  <body>
    <div class="h-stories">
      <div class="row">
        <!-- image -->
        <div class="col6">
          <div id="galeria">
            <ul class="galeria">
              <li class="galeria__item">
                <img
                  src="https://cdn.glitch.com/acb272d3-62f0-4f6b-811c-9555ba4d6893%2FGORRAVISTAREAL.PNG?v=1616453545532"
                  id="photos"
                  class="galeria__img tamaño-300"
                />
              </li>
            </ul>
          </div>

          <!-- Script para Lightbox-->
          <script src="modal.js"></script>
        </div>
        <!-- modelo 3D -->
        <div class="col6 border">
          <model-viewer
            src="https://cdn.glitch.com/acb272d3-62f0-4f6b-811c-9555ba4d6893%2Fgorra1.glb?v=1616452140331"
            camera-controls
            ios-src="https://cdn.glitch.com/acb272d3-62f0-4f6b-811c-9555ba4d6893%2Fgorrita.usdz?v=1616452115035"
            ar-modes="scene-viewer webxr quick-look"
            ar
            shadow-intensity="0"
            shadow-softness="0"
            camera-orbit="39.48deg 77.25deg 8.055m"
            poster="https://cdn.glitch.com/b4b6e689-6c1d-4b21-aaa4-0ef76fe299f5%2Fposter.png?v=1616309177733"
            auto-rotate
            min-camera-orbit="auto auto auto"
            max-camera-orbit="auto auto 8.055m"
          >
          </model-viewer>
        </div>
      </div>
      <br /><br />
      <div class="row Container">
        <!-- Información -->
        <div class="col8">
           <h4 class="custom-title-h4">GORRA BLANCA</h4>
          <ul class="tabs"> 
            <li rel="tab1"> Descripción</li>
            
          </ul>
          <div id="tab1" class="tab_content"> 
         <p>Gorra blanca, visera curva y cierre snapback.
Color:
Blanco</p>
        </div>
        
        <!--Botones-->
        <div class="col4">
   <a href="index.php"><input style="border:1px solid;margin-bottom: 10%;" type="button" onclick="" value="Area de compra"/><br></a>
          <input style="border:1px solid" type="button" id="opener" value="Codigo QR" />

          <div id="dialog" title="Codigo QR">
            <img
              src="https://cdn.glitch.com/acb272d3-62f0-4f6b-811c-9555ba4d6893%2FgorraQR.jpeg?v=1616394147912"
              width="250px"
              high="250px"
              align="center"
            />
            "Escanea este codigo con tu móvil"
          </div>
        </div>
      </div>
    </div>
      <!--Comentarios-->
      <br>
      <h4 class="custom-title-h4">Seccion de Comentarios</h4>
      <div id="graphcomment"></div>
<script type="text/javascript">

  /* - - - CONFIGURATION VARIABLES - - - */

  var __semio__params = {
    graphcommentId: "BlitSport", // make sure the id is yours

    behaviour: {
      // HIGHLY RECOMMENDED
      //  uid: "...", // uniq identifer for the comments thread on your page (ex: your page id)
    },

    // configure your variables here

  }

  /* - - - DON'T EDIT BELOW THIS LINE - - - */

  function __semio__onload() {
    __semio__gc_graphlogin(__semio__params)
  }


  (function() {
    var gc = document.createElement('script'); gc.type = 'text/javascript'; gc.async = true;
    gc.onload = __semio__onload; gc.defer = true; gc.src = 'https://integration.graphcomment.com/gc_graphlogin.js?' + Date.now();
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(gc);
  })();
  

</script>
          <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0" nonce="iybhnVZj"></script>
          <div class="fb-comments" data-href="https://blitsport.000webhostapp.com/" data-width="100%" data-numposts="5"></div>
        </div> -->
  <footer>
  <?php include "templates/pie.php"; ?>
   </footer>
 </body>
</html>
