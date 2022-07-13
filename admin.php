<?php include 'header.php';?>
<?php include 'Conexion.php';?>

<?php

    if ($_SESSION['conectado']){

        $conexion = new conexion();# es un objeto de tipo conexion,
 
        $proyectos= $conexion->consultar("SELECT * FROM `proyecto`");
        
?>


    
<!--bs5 jum-->
<div class="p-5 bg-light">
    <div class="container">
        <span>Conectado:</span>
        <h1 class="display-4"><?php echo strtoupper($_SESSION['usuario'])?></h1>
        <p class="lead">Portfolio</p>
        <hr class="my-2">
               
    </div>
</div>


<div class ="row row-cols-1 row-cols-md-3 g-4">

<?php #leemos proyectos 1 por 1
 foreach($proyectos as $proyecto){ ?>
    <div class="col">
        <div class="card">
            <img class="card-img-top" width="100" src="images/<?php echo $proyecto['imagen'];?>" alt="">
           
            <div class="card-body">
            <h5 class="card-title"><?php echo $proyecto['titulo'];?></h5>
            <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
            </div>
          
        </div>
    
    </div>
 <?php } ?>
</div>
<?php
    }else{
        header('location: index.php');
    }
   
?>
 <?php include 'footer.php';?>