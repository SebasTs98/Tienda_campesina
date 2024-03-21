<?php
require "conexion.php";
        session_start();

        if(!isset( $_SESSION['id'])){
            header("Location: index.php");

        }

        $nombre = $_SESSION['nombre'];
        $tipo_usuario =$_SESSION['tipo_usuario'];

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema Menu</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="principal.php">Sistema Menu</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                    
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Salir.php">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav"> 
         <?php

                                if($tipo_usuario == 1){



                            ?>  
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">

                       
                        <div class="nav">                      
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                    
                           
                            <div class="sb-sidenav-menu-heading">Tablas</div>
                             <a class="nav-link" href="producto.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Registrar Producto
                            </a>


                            <a class="nav-link" href="tabla2.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Productos
                            </a>

                            <a class="nav-link" href="tabla.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Usuarios
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
         <?php 
                        }
                            ?>
            <div id="layoutSidenav_content">
                <main>

                     <?php

                                if($tipo_usuario == 2){



                            ?> 
                    <div class="container-fluid">
                        <h1 class="mt-4">Venta de Muebles</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                       
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                             
                                                <th>Ref</th>
                                                <th>Nombre</th>
                                                <th>precio</th>
                                                <th>Imagen</th>
                                                <th>Acción</th>
                                                
                                            </tr>
                                        </thead>


                                            <?php 

                                            $query = "SELECT * FROM productos ";
                                            $resultado = $mysqli->query($query);
                                            while ($row = $resultado->fetch_assoc() ) {     ?>  

                                            <tr>
                                               
                                                <td><?php echo $row['ref'];?></td> 
                                                <td><?php echo $row['nombre'];?></td> 
                                                <td><?php echo $row['precio'];?></td> 

                                                 <td><center> <img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td> 

                                            <td><a data-toggle="modal" href="#adm_update<?php echo $row['id'];?>" class="btn btn-btn-sm"><i class="fas fa-edit"></i>Comprar<span class="glyphicon glyphicon-pencil"></span></a></td>




                                                     <!-- The Modal Actualizar-->

                        <div class="modal" id="adm_update<?php echo $row['id'];?>">

                            <div class="modal-dialog">

                                <div class="modal-content"> 
                                

                                    <!-- Modal Header -->

                                    <div class="modal-header">

                                    <h4 class="modal-title">Facturacion <i class="fas fa-users-cog"></i></h4>

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    </div>

                                    

                                    <!-- Modal body -->

                                    <div class="modal-body">

                                        <form action="" method="POST">


                                        

                                            <div class="form-group">

                                                <input type="text" name="nombre" value="<?php echo $row['nombre'];?>" class="form-control" placeholder="Nombre" required="required">

                                            </div>

                                            <div class="form-group">

                                                <input type="text" name="precio" value="<?php echo $row['precio'];?>" class="form-control" placeholder=Precio required="required">

                                            </div>

                                            <div class="form-group">

                                               <center> <img  height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>

                                            </div>

                                            

                                            <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i>Comprar</button>
                                        </form>
                                    </div>

                                    
                                    <!-- Modal footer -->

                                    <div class="modal-footer">

                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                                    </div>

                                    
                               </div>
                            </div>
                        </div>
                               

                            </tr>     
                                       <?php 
                                        }

                                            ?>

                                               <tfoot>
                                            <tr>
                                                 <th>Id</th>
                                                <th>Nombre</th>
                                                <th>precio</th>
                                                <th>Imagen</th>
                                                <th>Acción</th>
                                               
                                            </tr>
                                        </tfoot>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                          <?php 
                                        }

                                            ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
