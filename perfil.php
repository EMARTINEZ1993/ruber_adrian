
<?php
include 'sesion.php';
if ($usuario_conectado) {
    include "cabeza.php";
    include "menu.php";
    include "menu_lateral.php";
    include "formulario.php";
    include "pie.php";
} else {
    header("location:index.php");
}

?>