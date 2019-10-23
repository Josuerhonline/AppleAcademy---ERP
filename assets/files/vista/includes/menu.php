<!-- Sidebar -->

<div id="menu" style="display:none;">

  <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="appAcademy.php" title="Dashboard">
        <i class="fas fa-fw fa-home"></i>
        <span>INICIO</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../config/cerrar.php" title="Salir del Sistema">
        <i class="fas fa-users"></i>
        <span>Autorizaciones</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
          <span>Usuarios</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

          <a class="dropdown-item" href="../../../../../../newApple/appleacademy/assets/files/vista/usuarios.php">Agregar Usuario</a>
           <a class="dropdown-item" href="../../../../../../newApple/appleacademy/assets/files/vista/autorizaciones.php">Autorizaciones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../config/cerrar.php" title="Salir del Sistema">
          <i class="fas fa-power-off"></i>
          <span>Cerrar Sesión</span></a>
        </li>
      </ul>

    </div>
    <script src="../../../librerias/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
      function hide(){


       divC = document.getElementById("menu");
       divC.style.display="none";

       divC = document.getElementById("bMenu");
       divC.style.display="none";

       divT = document.getElementById("bShow");
       divT.style.display = "";
     }
     function show(){


       divC = document.getElementById("menu");
       divC.style.display="";

       divC = document.getElementById("bMenu");
       divC.style.display="";

       divT = document.getElementById("bShow");
       divT.style.display = "none";
     }
   </script>