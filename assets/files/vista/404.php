<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>No se pudo Acceder</title>
    <link rel="icon" type="image/png" href="../../../librerias/images/logoBanner2.png"/>
    <link href="../../../.../../librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../librerias/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../../../librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../../../librerias/css/sb-admin.css" rel="stylesheet">
  </head>
  <body id="page-top" onload="nobackbutton();">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="#" title="Apple Academy"><img src="../../../librerias/images/logoBanner.png" border="1" width="30" height="30" style="margin-top: -10px;"> Apple Academy</a>
    </nav>
    <div id="wrapper">
      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Sin Acceso</li>
          </ol>
          <!-- Page Content -->
          <img src="../../../librerias/images/triste.png" align="left" alt="Sesión expirada" hspace="50" height="100" width="100">
          <h1 class="display-1">Sin Acceso</h1>
          <p class="lead">No se pudo acceder a la página, porque no tiene una Sesión Activa. Por favor
            <a href="../../../index.php" title="Iniciar Sesión">INICIA SESIÓN</a>
            para poder Ingresar al Sistema.
        </div>
        <?php include('includes/footer.php'); ?>     
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="../../../../librerias/vendor/jquery/jquery.min.js"></script>
    <script src="../../../../librerias/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../librerias/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../../../librerias/js/sb-admin.min.js"></script>
    <script>
      function nobackbutton(){ 
        window.location.hash="no-back-button";
        window.location.hash="Again-No-back-button" //chrome
        window.onhashchange=function(){window.location.hash="no-back-button";}
      }
    </script>
  </body>
</html>
