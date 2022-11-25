<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Travelz HTML5 Multipurpose Travel Template</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
    <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
    <!-- CSS Files -->


    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/travlez-jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/sb-admin.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- botton  eliminar y editar -->
    <script src="https://kit.fontawesome.com/c2d72fbcf2.js" crossorigin="anonymous"></script>
</head>

<body>
<script>
    function eliminar(){
      var respuesta=confirm("Estas seguro que deseas eliminar?");
      return respuesta
    }
  </script>
  
 

    <!-- Header  -->
    <header class="background-white box-shadow">
        <div class="background-main-color padding-tb-5px">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-none d-sm-block text-white">Impulsando el turismo ...</div>
                    <div class="col-sm">
                        <ul class="list-inline text-center margin-0px text-white">
                            <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                    <div class="col-sm d-none d-sm-block">
                        <ul class="user-area list-inline float-right margin-0px text-white">
                            <li class="list-inline-item  padding-right-10px"><a href="page-login-2.php"><i class="fa fa-lock padding-right-5px"></i>login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-output">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3">
                        <a id="logo" href="perfil-admin.html" class="d-inline-block margin-tb-10px"><img src="images/logo.png" alt=""></a>
                        <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a>
                    </div>
                    <div class="col-lg-9 position-inherit">

                        <ul id="menu-main" class="nav-menu float-right link-padding-tb-20px">
                            <li class="active mega-menu mega-links mega-links-4columns"><a href="#">Inicio</a>
                                <div class="mega-menu-out sub-menu-out">

                                    <ul class="sub-menu-columns">
                                        <li>
                                            <a href="01-home.html">Inicio</a>
                                        </li>
                                </div>
                            </li>
                            <li class="has-dropdown"><a class="dropdown" href="#">Mi perfil </a>
                                <ul class="sub-menu">
                                    <li class="has-dropdown"><a href="#">Gestión de cuenta</a>
                                        <ul class="sub-menu">
                                            <li><a href="header-layout-1.html">Modificar contraseña</a></li>
                                            <li><a href="header-layout-2.html">Modificar correo electroncio</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-dropdown"><a href="#">Base de datos</a>
                                <ul class="sub-menu">
                                    <li class="has-dropdown"><a href="#">Vehiculos</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Conductores</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Destinos</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Ventas</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-dropdown"><a href="#">Control de rutas</a>
                                <ul class="sub-menu">
                                    <li class="has-dropdown"><a href="#">GPS</a>
                                    </li>
                                </ul>
                            </li>



                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- // Header  -->
    <div class="background-light-grey">

        <div class="container padding-tb-50px">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark background-main-color " id="mainNav">
                <a class="navbar-brand" href="dashboard-home.html">Tabla de conductores</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-sidenav background-third-color" id="exampleAccordion">
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="dashboard-home.html">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Vehículos</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="dashboard-my-items.html">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Ventas</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="dashboard-reviews.html">
                <i class="fa fa-fw fa-star"></i>
                <span class="nav-link-text">Destinos</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="registro_conductores.php">
                <i class="fa fa-fw fa-user-circle"></i>
                <span class="nav-link-text">Registrar conductor</span>
            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right">
                            <a class="nav-link" href="dashboard-my-items.php">
                                <i class="fa fa-fw" aria-hidden="true"></i>
                <span class="nav-link-text">Tabla conductores</span>
            </a>
                        </li>
                            </ul>
                        </li>
                    </ul>
            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-fw fa-sign-out"></i>Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="dashboard-home.html">Dashboard</a></li>
                                <li class="active">Tabla de conductores</li>
                            </ol>

                            <!-- item  -->
                            <div class="container margin-tb-15px">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size: 11px;">
                                    <thead>
                                        <tr>
                                        <th>id</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>DNI</th>
                                            <th>Fecha nacimiento </th>
                                            <th>Dirección</th>
                                            <th>telefono</th>
                                            <th>Correo</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                        <?php
                                        
                                         include "modelo/conexion.php";
                                        include "controlador/eliminar.php";
                                        $sql=$conexion->query(" select * from registro_conductor ");
                                         while ($datos=$sql->fetch_object()) { ?>
                                         <tr><td><?= $datos->id_conductor?></td>
                                         <td><?= $datos->nombres?></td>
                                         <td><?= $datos->apellidos?></td>
                                         <td><?= $datos->numero_cedula?></td>
                                         <td><?= $datos->fecha_nacimiento?></td>
                                         <td><?= $datos->direccion?></td>
                                         <td><?= $datos->telefono_celular?></td>
                                         <td><?= $datos->correo?></td>
                                         <td> <a href="modificar.php?id=<?=  $datos->id_conductor ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td> <a onclick="return eliminar()" href="dashboard-my-items.php?id=<?=  $datos->id_conductor ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>


                        </div>
                    </div>
                </div>
                <!-- /.container-fluid-->
                <!-- /.content-wrapper-->


                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
        </a>
                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Desea cerrar sesión?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
                </button>
                            </div>
                            <div class="modal-body">Selecciona salir si quieres cerrar la sesión actual, en caso contrario selecciona cancelar.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="page-login-2.php">Salir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap core JavaScript-->
            </div>



        </div>
    </div>

        </div>

    </footer>
    <!-- // Footer -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/sticky-sidebar.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
