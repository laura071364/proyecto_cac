
<?php
    session_start();
    if ($_SESSION['conectado']){
        $titulo=(isset($_POST['titulo']))?$_POST['titulo']:"";
        $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
        $fecha=(isset($_POST['fecha']))?$_POST['fecha']:"";
        $imagen=(isset($_POST['imagen']))?$_POST['imagen']:"";
        $tit_img=(isset($_POST['tit_img']))?$_POST['tit_img']:"";
        $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    
        if($titulo!="" && $descripcion!="" && $fecha!="" && $tit&& $imagen!="")
        switch ($accion) {
            case 'btnAgregar':
                
                break;
            case 'btnModificar':
                echo "boton Modificar";
                break;
            case 'btnEliminar':
                echo "boton Eliminar";
                break;
            case 'btnSalir':
                header('location: ../php/cerrarSesion.php');
                break;        
        }
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
            <title>Administrador registrado</title>
        </head>
        <body>
            <div class="container">
                <form action="" method="post" enctype="multipart/formdata">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" placeholder="" require>
                    <br>

                    <label for="descripcion">Descripcion</label>
                    <input type="textArea" name="descripcion" id="descripcion" placeholder="" require>
                    <br>
                    
                    <label for="fecha">Fecha</label>
                    <input type="datetime-local" name="fecha" id="fecha" require>
                    <br>

                    <label for="tit_img">Titulo de Imagen</label>
                    <input type="text" name="tit_img" id="tit_img" placeholder="" require>
                    <br>

                    <label for="imagen">Miniatura</label>
                    <input type="file" name="imagen" id="imagen" placeholder="" require>
                    <br>

                    <button type="submit" name="accion" value="btnAgregar">Agregar</button>
                    <button type="submit" name="accion" value="btnModificar">Modificar</button>
                    <button type="submit" name="accion" value="btnEliminar">Eliminar</button>
                    <button type="submit" name="accion" value="btnSalir">Cerrar Sesion</button>
                </form>

                <div class="row">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                <th>fecha</th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </body>
        </html>
        <?php
    }else{
        header('location: ../index.html');
    }
   
?>
