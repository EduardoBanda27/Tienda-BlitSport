<?php 
session_start();

$mensaje="";


if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){

        case 'Agregar':
            if(is_numeric(openssl_decrypt ( $_POST['id'],COD,KEY))){
                 $ID=openssl_decrypt ( $_POST['id'],COD,KEY);
                 $mensaje.="Ok ID CORRECTO".$ID."<br>";

            }else{
                $mensaje.="UPS...ID incorrecto".$ID."<br/>";
            }

            if(is_string(openssl_decrypt ( $_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt ( $_POST['nombre'],COD,KEY);
                $mensaje.="Ok nombre CORRECTO".$NOMBRE."<br/>";

           }else{
               $mensaje.="UPS...nombre incorrecto".$ID;
           break;}

           if(is_numeric(openssl_decrypt ( $_POST['precio'],COD,KEY))){
            $PRECIO=openssl_decrypt ( $_POST['precio'],COD,KEY);
            $mensaje.="Ok precio CORRECTO".$PRECIO."<br/>";

       }else{
           $mensaje.="UPS...precio incorrecto".$ID.
           "<br/>"; break;}
       if(is_numeric(openssl_decrypt ( $_POST['cantidad'],COD,KEY))){
        $CANTIDAD=openssl_decrypt ( $_POST['cantidad'],COD,KEY);
        $mensaje.="Ok cantidad correcta".$CANTIDAD."<br/>";

   }else{
       $mensaje.="UPS...cantidad incorrecto".$ID.
       "<br/>"; break;}

    if(!isset($_SESSION['CARRITO'])){
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO,
        );
        $_SESSION['CARRITO'][0]=$producto;
        $mensaje="Producto agregado al carrito";
    }else{

        $NumeroProductos=count($_SESSION['CARRITO']);
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO,
        );
        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
    }
    //$mensaje=print_r( $_SESSION,true);
    $mensaje="Producto agregado al carrito";
       break;
        case "Eliminar";

                if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                    $ID=openssl_decrypt($_POST["id"],COD,KEY);
                    
                    foreach($_SESSION['CARRITO'] as $indice=>$producto){
                        if($producto['ID']==$ID){
                            unset($_SESSION['CARRITO'][$indice]);
                            echo "<script>alert (elemento borrado);</script>";

                        }



                    }

                }


        break;




    }
}


?>