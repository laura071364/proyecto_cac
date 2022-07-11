<?php
    require('Conexion.php');

    public class Proyecto{
        private string titulo;
        private string descripcion;
        private string tit_img;
        private datetime;

        public function __construct($titulo,$descripcion,$tit_img){
            $this->titulo= titulo;
            $this->descripcion= descripcion;
            $this->tit_img= tit_img;
        }

        public function agregarProyecto(){
            $query="insert into proyecto ('titulo','descripcion','tit_img') values ('{$this->titulo}','{$this->descripcion}','{$this->tit_img}')";
            $conn=new Conexion();
            $conn->conectarDB();
            $result=$conn->ejecutar($query);
            $conn->desconectarDB();
            return $result;
        }

        public function modificarProyecto(){
            $query="update Proyecto set";
            $conn=new Conexion();
            $conn->conectarDB();
            $result=$conn->ejecutar($query);
            $conn->desconectarDB();
            return $result;
        }

        public function borrarProyecto(){

        }

        public function buscarProyecto(string nombreProyecto){

        }

        
    }
?>
