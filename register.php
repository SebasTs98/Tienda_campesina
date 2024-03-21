
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>REGISTRO</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crea Tu Cuenta</h3></div>
                                    <div class="card-body">
                                        
        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"  autocomplete="off">
                                <div class="form-group">
                                    <label class="col-sm-6 control-label">Usuario</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label  class="col-sm-6 control-label">Contraseña</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label  class="col-sm-6 control-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label  class="col-sm-6 control-label">Roll en EL sistema</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="tipo_user" name="tipo_user">
                                            <option value="admi">1</option>
                                            <option value="usua">2</option>
                                           
                                        </select>
                                    </div>
                                </div>           
                               
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="index.php" class="btn btn-default">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>








                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
    </body>
</html>
