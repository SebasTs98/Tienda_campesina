<?php
    
    include('conexion.php');
    $refe = $_POST['ref'];
    $nombres = $_POST['nombre'];
    $precios = $_POST['precio'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query ="INSERT INTO productos(ref,nombre,precio,imagen) VALUES ('$refe','$nombres','$precios','$imagen')";
    $resultado = $mysqli->query($query);

    if($resultado){
      echo "<script> alert('Datos  guardados'); window.location.href='producto.php';
            </script> ";
    }else{
      echo  "<script> alert('Datos no guardados'); window.location.href='producto.php';
            </script> ";
    }

?>