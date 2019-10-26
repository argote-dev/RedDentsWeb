<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!--   <link rel="shortcut icon" href="img/Logo_RDS_1.png"> -->


  <title>RedDents</title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- dataTable -->
  
  <link href="datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="datatable/css/responsive.bootstrap4.min.css" rel="stylesheet">
  


  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">


</head>

<body id="page-top">
      <header>
        <nav class="navbar navbar-expand navbar-dark barnav static-top">
            <a class="navbar-brand mr-1" href="#"><img class="logo" src="img/Logo-white.png" alt="RedDents"></a>
            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
              <i class="fas fa-bars"></i>
            </button>
            
       <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
         
       </form>
      
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                  </div>
              </li>
            </ul>
          </nav>
      </header>

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-clinic-medical"></i>
          <span>Consultorio</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-user-md"></i>
          <span>Odontólogos</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Administrar</h6>
          <a class="dropdown-item" href="odontologo-busqueda.html">Buscar</a>
          <a class="dropdown-item" href="odontologo-registro.html">Registrar</a>
          <a class="dropdown-item" href="">Eliminar o Actualizar</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-user"></i></i>
          <span>Pacientes</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Administrar</h6>
          <a class="dropdown-item active-item" href="">Buscar</a>
          <a class="dropdown-item" href="paciente-registro.html">Registrar</a>
          <a class="dropdown-item" href="">Eliminar o Actualizar</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-tooth"></i></i></i>
          <span>Servicios</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Administrar</h6>
          <a class="dropdown-item" href="">Buscar</a>
          <a class="dropdown-item" href="">Registrar</a>
          <a class="dropdown-item" href="">Eliminar o Actualizar</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      
      
    </ul>
    <div id="content-wrapper">

<!--       <div class="container contenedor">

  <div class="table-responsive-sm">
    <table class="table">
  <thead class="thead-light">
    <tr><th scope="col" colspan="12" class="text-center"><h4 class="titulos">PACIENTES</h4></th></tr>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Id</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Nombres</th>
      <th scope="col">F. nacimiento</th>
      <th scope="col">F. ingreso</th>
      <th scope="col">Dirección</th>
      <th scope="col">Telefono</th>
      <th scope="col" >Foto</th>
      <th scope="col" colspan="2" class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>Cell</td>
    <td>Cell</td>
    <td>Cell</td>
    <td>Cell</td>
    <td>Cell</td>
    <td>Cell</td>
    <td>Cell</td>
      
    </tr>
  </tbody>
    </table>
  </div> -->

  <div class="container contenedor">
    <div class="modal-registro">
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
          <tr><th scope="col" colspan="12" class="text-center"><h4 class="subtitulos">Busqueda de pacientes</h4></th></tr>
            <tr>
                <th>Documento</th>
                <th>Tipo de Documento</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha de Registro</th>
                <th>Genero</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger</td>
                <td>Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Garrett</td>
                <td>Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>8422</td>
                <td>g.winters@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Ashton</td>
                <td>Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>1562</td>
                <td>a.cox@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Cedric</td>
                <td>Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>6224</td>
                <td>c.kelly@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Airi</td>
                <td>Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>5407</td>
                <td>a.satou@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Brielle</td>
                <td>Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
                <td>4804</td>
                <td>b.williamson@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Herrod</td>
                <td>Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                <td>9608</td>
                <td>h.chandler@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Rhona</td>
                <td>Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
                <td>6200</td>
                <td>r.davidson@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Colleen</td>
                <td>Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                <td>2360</td>
                <td>c.hurst@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Sonya</td>
                <td>Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
                <td>1667</td>
                <td>s.frost@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Jena</td>
                <td>Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
                <td>3814</td>
                <td>j.gaines@datatables.net</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
        </tbody>
    </table>
  </div>
  </div>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="js/jquery.easing.min.js"></script>

  <!-- dataTable -->
  <script src="datatable/js/jquery.dataTables.min.js"></script>
  <script src="datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="datatable/js/dataTables.responsive.min.js
  "></script>
  <script src="datatable/js/responsive.bootstrap4.min.js"></script>
  <script>
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  </script>

</body>

</html>