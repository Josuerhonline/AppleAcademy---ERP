
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../../../librerias/images/logoBanner2.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Apple - Estudiantes</title>
  <link href="../../../librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../librerias/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../../librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="../../../librerias/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../../librerias/css/alertify.min.css">
  <link rel="stylesheet" type="text/css" href="../../../librerias/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../../../librerias/css/themes/default.css">
</head>
<script src="../../../librerias/vendor/jquery/jquery.min.js"></script>
<body id="page-top" onload="nobackbutton();">
  <?php include('includes/header.php'); ?>
  <div id="wrapper">
   <?php include('includes/menu.php'); ?>
   <div id="content-wrapper">
    <div class="container-fluid">
     <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="appAcademy.php">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Usuarios</li>
            <li class="breadcrumb-item active">Agregar usuario</li>
            <li class="breadcrumb-item active"></li>
            <button style="margin-top: -5px;" type="button" id="" class="btn btn-primary" onclick="" title="Agregar Usuario" data-toggle="modal" data-target="#addUser">
              <i class="fas fa-plus-circle"></i> Agregar
            </button>
          </ol>
   <!-- Tabla de Registros-->
   <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Listado de Usuarios             
      <button style="margin-top: -5px;" type="button" id="" class="btn btn-info" onclick="location.reload();" title="Refrescar tabla">
        <i class="fas fa-sync"></i>
      </button>
    </div>
    <div class="card-body">
     <div class="table-responsive">
      <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
       <thead>
        <tr>
         <th>N°</th>
         <th>Nombre Empleado</th>
         <th>Usuario</th>
         <th>Estado</th>
         <th>Acciones</th>
       </tr>
     </thead>
     <tbody id="tabla">
      <?php
      $num=0;
      ?>
      <tr>
        <td><?php echo $num+=1;?></td>
        <td style="font-style: oblique;"></td>
        <td id="em"></td>
        <td></td>
        <td>

          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editEst" ><i class="fas fa-edit"></i></a>
          <a href="#" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></a>

        </td>
      </tr>

    </tbody>
  </table>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php'); ?>
</div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<!-- Bootstrap core JavaScript-->
<script src="../../../librerias/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../../../librerias/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="../../../librerias/vendor/chart.js/Chart.min.js"></script>
<script src="../../../librerias/vendor/datatables/jquery.dataTables.js"></script>
<script src="../../../librerias/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="../../../librerias/js/alertify.js"></script>
<script src="../../../librerias/js/mascaras.js"></script>
<script src="../../../librerias/js/sb-admin.min.js"></script>
<script src="../../../librerias/js/select2.min.js"></script>
<script src="../../../librerias/js/demo/datatables-demo.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-firestore.js"></script>
<script src="../controlador/js/app.js"></script>

<script>
  function nobackbutton(){ 
    window.location.hash="no-back-button";
          window.location.hash="Again-No-back-button" //chrome
          window.onhashchange=function(){window.location.hash="no-back-button";}
        }


      </script>
    </body>
    </html>
<?php include('formularios/frmAddUsuario.php'); ?>