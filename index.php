<?php
include 'Conexion.php';
$conexion = new Conexion();
$proyectos = $conexion->consultar("SELECT * FROM `proyecto`");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@600&display=swap" rel="stylesheet">
    <link href="css/style_index.css" rel="stylesheet" type="text/css">

    <title>Principal</title>
</head>

<body> 
       <!-- <canvas style="position: absolute;top:0;left:0;z-index: -1;" id="canvas" width="1300" height="2100"></canvas> -->
    <div class="container-fluid">
       
        <div id="portada" class="row text-end">
            <p id="nombre_autor" class="animate__animated animate__fadeInLeft">Laura Ortega</p>
            <p id="profesion" class="animate__animated animate__fadeInUp pt-0">Desarrolladora web fullstack con PHP</p>
        </div>
        <div class="row text-end">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Sobre mi
                </a>
                </li>
                <li class="nav-item" data-bs-toggle="collapse" href="#tecnologias" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <a class="nav-link" href="#tecnologias">Tecnologías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#idiomas" role="button" aria-expanded="false" aria-controls="collapseExample" href="#idiomas">Idiomas</a>
                </li>
                
            </ul>
            
                <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-bs-target
  </button> -->
            
            <div class="collapse" id="collapseExample">
                <div class="card card-body bg-dark text-white">
                    <p>¡Hola visitante!</p>
                    <p>Soy Analista en sistemas, desarrolladora de apps de escritorio y web.</p>
                    <p>Disfruto aprender y crear.</p>
                    <span><a href="#contacto">contáctame</a></span>
                </div>
            </div>

            <div class="collapse" id="tecnologias">
                <div class="card card-body align-items-center" >
                    <img src="images/tecnologias.png" class="img-fluid rounded-top" width="30%" alt="tecnologias">
                </div>
            </div>
        </div>

        <div class="collapse" id="idiomas">
                <div class="card card-body bg-dark text-white text-end">
                    <p>Español nativo</p>
                    <p>Inglés intermedio - lectura competencia profesional</p>                    
                </div>
            </div>
        <!-- <div id="soy" class="row justify-content-center">
       <hr class="my-4">
        <h2 class="my-3">Quien Soy</h2> 
       
        <p>¡Hola visitante!</p>
        <p>Vivo en Argentina, soy Analista en sistemas, desarrolladora de apps y web.</p>
        <p>Me gusta la tecnología, el dibujo artístico, soy cinéfila y disfruto aprender y crear programas que la gente puede usar para simplificar tareas que de otra manera serían complicadas o tediosas incluso.</p>
       
       </div> -->
        <div class="row text-center">
            <h2>Portafolio</h2>
            <?php
            foreach ($proyectos as $proyecto) { ?>

                <div class="col">
                    <div class="card rounded-sm shadow">
                        <a href="#"><img class="card-img-top" width="100" src="images/<?php echo $proyecto['imagen']; ?>" alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?php echo $proyecto['titulo']; ?></h5>
                            <p class="card-text text-dark"><?php echo $proyecto['descripcion']; ?></p>
                        </div>

                    </div>

                </div>
            <?php } ?>
        </div>
        <div  class="footer">
            <hr>
            <div id="contacto" class="d-flex flex-row justify-content-center alig-items-center">
                <p>Contáctame</p>
                <a class="px-2" href="https://alvo.chat/47M"><img src="images/whatsapp.png" alt="Linkedin iconos creados por riajulislam - Flaticon" width="30" height="24" class="d-inline-block align-text-top">whatsapp</a>
                <a class="px-2" href="http://www.linkedin.com/in/laura-ortega-fullstack"><img src="images/linkedin.png" alt="Linkedin iconos creados por riajulislam - Flaticon" width="30" height="24" class="d-inline-block align-text-top">Linkedin</a>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>