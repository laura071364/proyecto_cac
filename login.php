<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--boostrap-->
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--                                                                                                                                                                                                                                                                                                                                                                                                                                                 -->

    <title>Ingreso</title>
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8">
            <div class="modal-content"> 
                <div class="col-12">
                    <img src="images/avatar.png" alt=""/>
                </div>
                <form class="col-12" action="validar.php" method="post" id="formulario_logueo">
                    <div class="form-group">
                        <div class="mb-3">                        
                            <input class= "form-control" type="text" name="username"  placeholder="Nombre de usuario">                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">                            
                            <input type="password" class="form-control"  name="password" placeholder="Contraseña">
                        </div>                                                                           
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>Entrar</button>
                </form> 
            </div>
        </div>
        
    </div>
        
   
</body>
</html>