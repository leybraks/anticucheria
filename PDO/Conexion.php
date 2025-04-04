<?php
    class Conexion{
        private $dbname;
        protected $conn;

        public function __construct(){
            $this->dbname ="C:\Users\leybr\OneDrive\Escritorio\DEV\CICLO lll\DESARROLLO DE APLICACIONES WEB ll\WEB_WORK_ONE\DB\usuariosR.db";
            $this->conn = new PDO("sqlite".$this->dbname);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
    }
?>