<?php
    
    include('conexion.php');
    $id =$_REQUEST['id'];

    $ref = $_POST['ref'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query ="UPDATE productos SET red='$refe',nombre='$nombre', precio='$precio' WHERE id ='$id' ";
   

   $resultado = $mysqli->query($query);
   if (!$ $resultado) {
      echo "<script> alert('Datos  guardados'); window.location.href='tabla2.php';
            </script> ";
    }else{
      echo  "<script> alert('Datos no guardados'); window.location.href='tabla2.php';
            </script> ";
    }

?>
