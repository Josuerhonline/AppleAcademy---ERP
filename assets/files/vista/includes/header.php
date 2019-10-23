

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  <a class="navbar-brand mr-1" href="appAcademy.php"  title="Apple Academy"><img src="../../../librerias/images/logoBanner.png" border="1" width="30" height="30" style="margin-top: -10px;">
  Apple Academy</a>
  <div id="bMenu">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0"  href="#" title="Minimizar/Maximizar Menú" onclick ="hide()">
      <i class="fas fa-bars"></i>
    </button>
  </div>
  <div id="bShow" style="display:none;">
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0"  href="#" title="Minimizar/Maximizar Menú" onclick ="show()">
      <i class="fas fa-bars"></i>
    </button>
    
  </div>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">Cambiar Contraseña</a>
        <a class="dropdown-item" href="selRol">Seleccionar Rol</a>
        <a class="dropdown-item" href="selSuc">Seleccionar Sucursal</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Cerrar Sesión</a>
      </div>
    </li>
  </ul>
</nav>
<script type="text/javascript">
  function hide(){


  }
</script>