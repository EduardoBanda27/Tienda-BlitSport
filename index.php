<?php 
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>


    <section class="Container module-small" style="padding:4%;">
          <div class="container">
            <form class="row">
              <div class="col-sm-4 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Default Sorting</option>
                  <option>Popular</option>
                  <option>Latest</option>
                  <option>Average Price</option>
                  <option>High Price</option>
                  <option>Low Price</option>
                </select>
              </div>
              <div class="col-sm-2 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Woman</option>
                  <option>Man</option>
                </select>
              </div>
              <div class="col-sm-3 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">All</option>
                  <option>Coats</option>
                  <option>Jackets</option>
                  <option>Dresses</option>
                  <option>Jumpsuits</option>
                  <option>Tops</option>
                  <option>Trousers</option>
                </select>
              </div>
              <div class="col-sm-3">
                <button class="btn btn-block btn-round btn-g" type="submit" style="border: solid 1px;">Apply</button>
              </div>
            </form>
          </div>
        </section>
    <hr class="divider-w">
      
       
  <section id="three-columns-m">
       <!--h3-title -->
         <div class="Container Grid--center title-m">
           
         </div>
         <?php if($mensaje!="" ){?>
         <div class="alert alert-success">
        <?php echo $mensaje; ?>
        <a href="mostrarCarrito.php" class="badge badge-succes">Ver carrito</a>
      </div>
      <?php }?>
          <!-- primer articulo -->
       <!-- column gift -->
        <div class="row_mb-3 row" >
          <?php 
          $sentencia=$pdo->prepare("SELECT*FROM productos");
          $sentencia->execute();
          $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          //print_r($listaProductos);
          
          ?>
          <?php foreach($listaProductos as $producto){?>
            <div class="col3 col-mb-100 space-m">
           <div class="image-gift">
            <img src="<?php echo $producto['imagen']; ?> alt=" class="tamaño-300"
            data-toggle="popoover"
            data-trigger="hover"
            data-content="<?php echo $producto['descripcion']; ?>"
            
            >
            
           </div>
         <!-- title and description -->
          <div class="Grid--center">
           <h4 class="custom-title-h4">
           <?php echo $producto['nombre']; ?>
           
           </h4>
           <h5 class="card-tittle">$<?php echo $producto['precio']; ?> </h5>
           
             <!-- boton -->
             <form action="" method="post">
              <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY); ?>">
              <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY); ?>">
              <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY) ; ?>">
              <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ;?>">

          <button style="border:1px solid;margin-bottom: 10%;"
          name="btnAccion"
          value="Agregar"
          type="submit">
        Comprar
        </button>
        </form>
    
           </div>
          </div>
            <?php } ?>
           <!-- image -->
           
           <!-- segundo articulo -->
           
           <!-- tercer articulo -->
            
          <!--cuarto articulo-->
          
          <!-- quinto articulo-->
       
        
           <!-- sexto articulo -->
            
         <!-- septimo articulo -->
           
           <!-- octavo articulo -->
           
           <!-- noveno articulo -->
            
         
    </div>
            
          
          </section>
          <?php 

include 'templates/pie.php';
?>
 