<?php include 'header.php'; ?>
<?php include 'conexion.php'; ?>


<?php 

 #si hay envio de datos, los inserto en la base de datos 
 if($_POST){

    $nombre_proyecto = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    #nombre de la imagen
    $imagen = $_FILES['archivo']['name'];
    #tenemos que guardar la imagen en una carpeta 
    $imagen_temporal=$_FILES['archivo']['tmp_name'];
    #creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
    $fecha = new DateTime();
    $imagen= $fecha->getTimestamp()."_".$imagen;
    move_uploaded_file($imagen_temporal,"images/".$imagen);
   
    #creo una instancia(objeto) de la clase de conexion
    $conexion = new conexion();
    $sql="INSERT INTO `proyecto` (`titulo`, `imagen`, `descripcion`) VALUES ('$nombre_proyecto' , '$imagen', '$descripcion')";
    $id_proyecto = $conexion->ejecutar($sql);

    #para que no inserte muchas veces
   # header("location:galeria.php");
 }
 #si nos envian por url, get 
 if($_GET){

    #ademas de borrar de la base , tenemos que borrar la foto de la carpeta imagenes
   if(isset($_GET['borrar'])){
        $id = $_GET['borrar'];
        $conexion = new conexion();

        #recuperamos la imagen de la base antes de borrar 
        $imagen = $conexion->consultar("select imagen FROM  `proyecto` where id=".$id);
        #la borramos de la carpeta 
        unlink("images/".$imagen[0]['imagen']);

        #borramos el registro de la base 
        $sql ="DELETE FROM `proyecto` WHERE `proyecto`.`id` =".$id; 
        $id_proyecto = $conexion->ejecutar($sql);

        #para que no intente borrar muchas veces
         header("location:gestion.php");
   }

   if(isset($_GET['modificar'])){
        $id = $_GET['modificar'];
      
        #pagina de modificacion por id
        header("location:modificar.php?modificar=".$id);
    }
   
    
 }
 #vamos a consultar para llenar la tabla 
 $conexion = new conexion();
 $proyectos= $conexion->consultar("SELECT * FROM `proyecto`");
 #comprobamos que la info este en forma de arreglo
 #print_r($resultado);

?>
   <br>
<!--ya tenemos un container en el header que cierra en el footer-->

    <div class="row d-flex justify-content-center mb-5">
        <div class="col-md-10 col-sm-12">
            <div class="color card">
                <div class="card-header">
                    Datos del Proyecto
                </div>
                <div class="card-body">
                    <!--para recepcionar archivos uso enctype-->
                    <form action="gestion.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="nombre">Nombre del Proyecto</label>
                            <input required class="form-control" type="text" name="titulo" id="titulo">
                        </div>
                    
                        <div>
                            <label for="archivo">Imagen del Proyecto</label>
                            <input required class="form-control" type="file" name ="archivo" id="archivo">
                        </div>
                        <br>
                        <div>
                            <label for="descripcion">Indique Descripción del Proyecto</label>
                            <textarea required class="form-control" name="descripcion" id="descripcion" cols="30" rows="4"></textarea>
                        </div>
                        <div>
                        <br>
                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                        </div>
                
                    </form>
                </div> <!--cierra el body-->
    
            </div><!--cierra el card-->
            
        </div><!--cierra el col-->
    </div><!--cierra el row-->
    <div class="tabla">
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-md-10 col-sm-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Eliminar</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php #leemos proyectos 1 por 1
                        foreach($proyectos as $proyecto){ ?>
                    
                        <tr >
                            <!--<td scope="row"><?php #echo $proyecto['id'];?></td> -->
                            <td><?php echo $proyecto['titulo'];?></td>
                            <td> <img width="100" src="images/<?php echo $proyecto['imagen'];?>" alt="">  </td>
                            <td class="texto"><?php echo $proyecto['descripcion'];?></td>
                            <td><a name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'];?>">Eliminar</a></td>
                            <td><a name="modificar" id="modificar" class="btn btn-warning" href="?modificar=<?php echo $proyecto['id'];?>">Modificar</a></td>
                        </tr>

                        <?php #cerramos la llave del foreach
                        } ?>
                    </tbody>
                </table>
            </div><!--cierra el col-->  
        </div>
    </div>
   
<?php include 'footer.php'; ?>