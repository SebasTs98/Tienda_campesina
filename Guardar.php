<?php
    
    require 'conexion.php';
    
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);
    $password = hash('sha512', $password);
    $rol = $_POST['rol'];

    $errores = '';

    // validar los campos de texto
    if (empty($usuario) || empty($password) || empty($rol)) {
        $errores .= '<li class="error">Por favor rellene todos los campos</li>';
    }else{
        // validacion de que el usuario no exista
        $mysqli= conexion($bd_config);
        $statement = $mysqli->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(
            ':usuario' => $usuario
        ));
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li class="error">Este usuario ya existe</li>';
        }
    }

    if($errores == ''){
        $mysqli = conexion($bd_config);
        $statement = $mysqli->prepare('INSERT INTO usuarios (id, usuario, password, tipo_usuario) VALUES(null, :usuario, :password, :tipo_usuario)');
        $statement->execute(
            array(
                ':usuario' => $usuario,
                ':password' => $password,
                ':tipo_usuario' => $rol
            )
        );

        header('Location: '.RUTA.'login.php');

    }
}




?>