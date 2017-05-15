<?php
    class database {
        private $host;
        private $user;
        private $pass;
        private $db;
        public $conexion;
        
        //Formulario
        public $nombre;
        public $apellido;
        public $cedula;
        public $correo;
        public $numero;
        private $consulta;
        private $submit;
        
        function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "mysqladmin";
            $this->db = "electivadb";
            
            $this->conexion = new mysqli ($this->host, $this->user, $this->pass, $this->db);
            
            if ($this->conexion->connect_errno) {echo "No hay conexion";}
        }
        
        function insert(){
        
            $this->nombre = $_POST['nombre'];
            $this->apellido = $_POST['apellido'];
            $this->cedula = $_POST['cedula'];
            $this->correo = $_POST['correo'];
            $this->numero = $_POST['numero'];
            
            $this->consulta="INSERT INTO estudiantes (nombre
            ,apellido,cedula,correo,numero ) VALUES ('$this->nombre','$this->apellido','$this->cedula','$this->correo','$this->numero')";
            $this->conexion->query($this->consulta);
              
        }
        
    }

$conn = new database();
$conn->insert();


?>