<?php 
  include 'conexion.php';

  $correo  = $_POST['email'];
  $clave   = $_POST['password'];

  $validar =$bd->query("SELECT * FROM user WHERE correo_user='$correo' AND clave_user='$clave' ");

  if ($fila = mysqli_fetch_array($validar)) {
  	 header("location:inicio.php");
  }
  else{
  	 echo '<script type="text/javascript">alert("Error de email o contraseña");</script>';
  	 header("refresh:1; url = index.php");
  }
?>
