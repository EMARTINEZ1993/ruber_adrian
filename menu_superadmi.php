  <?php
  $mostrar_nombre = $conexion_bd->query("SELECT * FROM usuarios, transporte where documento_usuario ='$usuario_conectado' ");
  #consulta
  while ($fila = mysqli_fetch_array($mostrar_nombre)) {
    $nombre    = $fila['nombre'];
    $documento = $fila['documento_usuario'];
    $cargo     = $fila['cargo'];
    $correo    = $fila['correo'];
    $telefono  = $fila['telefono'];
  }
  ?>
  <div class="menu_superior">
    <nav class="navbar navbar-default">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=""><a href="inicio_super.php">Inicio</a></li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Usuarios <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="registro_usuario.php">Registrar usuario</a></li>
              <li><a href="usuarios_general.php">Consultar usuarios registrados</a></li>

            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de vehículo <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="registrar_vehiculos.php">Registrar</a></li>
              <li><a href="listado_vehiculo_superadmi.php">Consultar</a></li>

            </ul>
          </li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Ingresos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="registro_ingresos.php">Registrar Ingreso</a></li>
              <li><a href="listado_ingresos.php">Consultar Ingreso</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Salidas <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="registro_salidas.php">Registrar Salidas</a></li>
              <li><a href="consultar_salidas.php">Consultar Salidas</a></li>
       
            </ul>
          </li>
            <li class=""><a href="manuales.php" target="_blank">Manuales </

            </li>

            <li><a href="manuales.php" target="_blank">
              <img src="https://cdn.pixabay.com/photo/2016/06/15/15/02/info-1459077_960_720.png" width="24px"></li></a>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          #consulta
          $mostrar_nombre = $conexion_bd->query("SELECT * FROM usuarios where documento_usuario ='$usuario_conectado' ");
          while ($fila = mysqli_fetch_array($mostrar_nombre)) {
            $nombre = $fila['nombre'];
          }
          ?>
          <li ><a href="#"><b class="text text-sucsess"><?php echo "$nombre"; ?></b></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <i class="fa fa-cog fa-spin  fa-fw"></i><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="clave_super.php">Cambiar Clave</a></li>
              <li><a href="cambiar_datos_personales.php">Cambiar Datos Personales</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../index.php" class="">Salir</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>

