<?php    
   
    include 'Conexion.php';
    session_start();
      
    if($_POST['username'] && $_POST['password'])
    {   
        //echo"llego el envio";
        
        $user =trim($_POST['username']);
        $pass =trim($_POST['password']);
        
        //echo "valido usuario";
        //echo $_POST['username'];
        $conex=new Conexion();
       
        
        //echo "conecto a la base";
        
        $query="SELECT * FROM usuario WHERE username ='$user' and password = '$pass'";

        $result=$conex->consultar($query);      
       //var_dump($result);  
       //echo count($result) ;
       //echo $result[0]['username'];
        if((count($result))>0){           
           
            $_SESSION['usuario']=$user;
            $_SESSION['conectado']=true;           
            //echo "llega";
            header("location: admin.php"); 
            die();
        } else{
            echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
            header('location: index.php');
            die();         
        } 
       
    }else{
        header('location: index.php');
         die(); 
    }
?>
