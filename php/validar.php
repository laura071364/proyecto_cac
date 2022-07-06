<?php    
   
    require('../clases/Conexion.php');
   
   
    if($_POST['username'] && $_POST['password'])
    {   
        echo"llego el envio";
        
        $user =trim($_POST['username']);
        $pass =trim($_POST['password']);
        
        //echo "valido usuario";
        
        $conex=new Conexion();
        $conex->conectarDB();
        
        //echo "conecto a la base";
        
        $query="SELECT * FROM usuario WHERE username ='$user' and password = '$pass'";

        $result=$conex->ejecutar($query);      
        //$conex->desconectarDB();
        $rows =$conex->filasRetornadas();
        
        //echo "tiene ".$rows." filas";
        
        if($rows>0){
            session_start();

            $_SESSION['username']=$user;
            $_SESSION['conectado']=true;           
        
            header('location: ../general/admin.php'); 
        } else{
            header('location: ../index.html');         
        } 
      
    }else{
        header('location: ../index.html');
          
    }
?>
