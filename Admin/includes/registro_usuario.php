<?php 
   include("connect_sistemaestatal.php");

  $nombre_usuario   = $_POST['nombre_usuario'];
  $correo_usuario = $_POST['correo_usuario'];
  $usuario    = $_POST['usuario'];
  $pass_usuario     = $_POST['pass_usuario'];
  $tipo_usuario= $_POST['tipo_usuario']; 

  if ($result = $mysql->query("INSERT INTO registro_usuario VALUES ('','".$nombre_usuario."','".$correo_usuario."','".$usuario."','".$pass_usuario."','".$tipo_usuario."')") === TRUE) {
    echo http_response_code(202);
  } else {
    echo "Error: " .$mysql->error;
  }   
?>