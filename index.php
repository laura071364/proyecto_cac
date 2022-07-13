<?php 
    include 'Conexion.php';
    $conexion = new Conexion();
    $proyectos= $conexion->consultar("SELECT * FROM `proyecto`");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- <link href="css/portada.css" rel="stylesheet" type="text/css"> -->
    
    <title>Principal</title>
</head>
<body>
<!-- <canvas style="position: absolute;top:0;left:0;z-index: -1;" id="canvas" width="1300" height="2100"></canvas> -->
    <div class="container">
        <div class="row text-end">                        
            <p class="animate__animated animate__fadeInLeft" style="font-family:Vegur, 'PT Sans', Verdana, sans-serif ;font-weight:bold; font-size :6rem !important;">Laura Ortega</p>               
            <p class="animate__animated animate__fadeInUp" style="font-family: 'Edu SA Beginner', cursive;">Desarrolladora web fullstack con PHP</p>
            <div class="mx-auto">
                <img src="images/codigo2.png" width="100%" alt="">
            </div>                                        
        </div>
    </div>

    <div class="container">
        <div  class ="row justify-content-center">
            <h2>Portafolio</h2>
            <?php 
                foreach($proyectos as $proyecto){ ?>
            
                    <div class="col">
                        <div class="card border border-3 shadow">
                            <a href="#"><img class="card-img-top" width="100" src="images/<?php echo $proyecto['imagen'];?>" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title text-dark"><?php echo $proyecto['titulo'];?></h5>
                                <p class="card-text text-dark"><?php echo $proyecto['descripcion'];?></p>                                    
                            </div>
                        
                        </div>
                    
                    </div>
                <?php } ?>
        </div>
        <div class="footer">   
            <hr>
            <div class="d-flex flex-row justify-content-center alig-items-center">
                <p>Contáctame</p>
                <a class="bg-white px-2" href="https://alvo.chat/47M"><img src="images/whatsapp.png" alt="Linkedin iconos creados por riajulislam - Flaticon" width="30" height="24" class="d-inline-block align-text-top">whatsapp</a>
                <a class="bg-white px-2" href="http://www.linkedin.com/in/laura-ortega-fullstack"><img src="images/linkedin.png" alt="Linkedin iconos creados por riajulislam - Flaticon" width="30" height="24" class="d-inline-block align-text-top">Linkedin</a>
            </div>          
            
        </div>
      
</body>
</html>