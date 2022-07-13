<?php
    class Conexion{
      //atributos
        private $host="localhost";
        private $user="root";
        private $pass="";
        private $db="cac_bknd";
        private $conn;
        
        //metodos
       /*  public function __construct(){
            $this->host="localhost";
            $this->user="root";
            $this->pass="";
            $this->db="cac_bknd";
        }
        
        public function conectarDB(){
            //crea y retorna la conexion con la bd
            $this->conn= new mysqli($this->host,$this->user,$this->pass,$this->db);
            if($this->conn->connect_errno){
                die("ERROR de conexion: (". $this->conn->connect_error.")". $this->conn->connect_errno);
            }
        }

        public function desconectarDB(){
            $this->conn->close();
        }

        public function ejecutar($sql){
            $result=$this->conn->query($sql);
            return $result;//devuelve....true?
        }
       
        public function filasRetornadas(){
            return $this->conn->affected_rows;
        }

        public function ultimaFila($result){
            return $result->fetch_row();
        }

        public function limpiarQuery(){
            $result->free_result();
        } */
        public function __construct(){
            try{
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);
                #ACTIVAMOS LOS ERRORES Y LAS EXCEPTIONES
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
            }catch(PDOException $e){
                return "Falla de Conexión".$e;
            }
        }
    
         #creo un metodo de ejecucion a sql de insert, update, delete   
        public function ejecutar($sql){
            #Execute una consulta de sql
            $this->conn->exec($sql);
            #esto nos da el valor de id insertado
            return $this->conn->lastInsertId();
        }
        public function consultar($sql){ # select 
            #ejecuta la consulta y nos devuelve la info de la base
            $sentencia = $this->conn->prepare($sql);
            $sentencia->execute();
            #retorna todos los registros de la consulta sql
            return $sentencia->fetchAll();
        }
    }