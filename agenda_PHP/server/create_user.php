<?php

  	require_once('conector.php');

  	$datos = array(
      'nombre' => 'Usuario 1',
      'email' => 'usuario1@mail.com.ar',
      'clave' => password_hash("123456", PASSWORD_DEFAULT),
      'nacimiento' => '1985-01-01');

    $con = new ConectorBD('localhost','root','');
  	$respuesta = $con->iniciarConexion('agenda');

  	if ($respuesta == 'OK') {
    	if($con->insertarRegistro('usuarios', $datos)){
      		$respuesta = "exito en la inserción";
	    }else {
	      	$respuesta = "Hubo un error y los datos no han sido cargados";
	    }
  	}else {
    	$respuesta = "No se pudo conectar a la base de datos";
  	}
    $con->cerrarConexion();
?>
