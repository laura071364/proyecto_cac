<?php
    require('Conexion.php');

    class Proyecto{
        private $titulo;
        private $descripcion;
        private $tit_img;
       

        public function __construct($titulo,$descripcion,$tit_img){
            $this->titulo= titulo;
            $this->descripcion= descripcion;
            $this->tit_img= tit_img;
        }

        public function agregarProyecto(){
            $query="insert into proyecto ('titulo','descripcion','tit_img') values ('{$this->titulo}','{$this->descripcion}','{$this->tit_img}')";
            $result=$conn->ejecutar($query);
            $conn->desconectarDB();
            return $result;
        }

        public function modificarProyecto(){
            $query="update Proyecto set";
            $result=$conn->ejecutar($query);
            return $result;
        }

        public function borrarProyecto(){

        }

        public function buscarProyecto($nombreProyecto){

        }

        
    }
?>
