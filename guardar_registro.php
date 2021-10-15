<?php

$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];

if ($clave1 == $clave2) {

    $nombre   = $_POST['nombre'];
    $correo   = $_POST['email'];
    $telefono = $_POST['telefono'];
    $foto     = $_FILES['foto']['name'];
    $pass     = md5($_POST['clave1']);
    $ruta     = 'images/profiles/';

    $foto2 = $ruta . $foto;
    move_uploaded_file($_FILES['foto']['tmp_name'], $ruta . $foto);

    include "conexion.php";
    $guardar = $bd->query("INSERT INTO usuario
    (correo_usuario, nombre_usuario, telefono_usuario, clave_usuario, foto_usuario)
    values('$correo', '$nombre','$telefono', '$pass', '$foto2' )");

    if ($guardar) {
        echo '<script type="text/javascript">
                    alert("Registro exitoso");
            </script>';
        header("refresh:1;  url=register.php");
    } else {
        echo '<script type="text/javascript">
                    alert("Error al registrar");
            </script>';
        header("refresh:1;  url=register.php");
    }

} else {

    echo '<script type="text/javascript">
            alert("Las claves no coinciden");
        </script>';

    header("refresh:1; url = register.php");
}
