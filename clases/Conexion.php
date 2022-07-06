<?php
    class Conexion{
      //atributos
        private $host;
        private $user;
        private $pass;
        private $db;
        private $conn;
        
        //metodos
        public function __construct(){
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
            return $result;
        }
       
        public function filasRetornadas(){
            return $this->conn->affected_rows;
        }

        public function ultimaFila($result){
            return $result->fetch_row();
        }

        public function limpiarQuery(){
            $result->free_result();
        }
    }