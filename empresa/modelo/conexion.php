<?php

    /* Es la capa donde se trabaja con los datos, por tanto contendrá mecanismos
    para acceder a la información y también para actualizar su estado. Los datos
    los tendremos habitualmente en una base de datos, por lo que en los modelos 
    tendremos todas las funciones que accederán a las tablas y harán los correspondientes 
    selects, updates, inserts, etc. */

    class conexion{
        
        private $conexion;
        private $server = "localhost";
        private $user = "root";
        private $pass = "";
        private $baseDato = "empresa";
        private $usuario;
        private $password;
        
        public function __construct(){
            $this->conexion = new mysqli($this->server, $this->user, $this->pass, $this->baseDato);
            if ($this->conexion->connect_errno) {
                exit("Error al intentar conectar con la base de datos, ERROR: <br><br> (" . $this->conexion->connect_errno);
            }
        }
        
        public function cerrar(){
            $this->conexion->close();
        }
        
        public function login($user, $pass) {
            $this->usuario = $user;
            $this->password = $pass;
            
            $buscar = "select id, nombre, apellido, usuario, password from usuario where usuario = '". $this->usuario ."' && password = '". $this->password ."'";
            
            $consulta = $this->conexion->query($buscar);
            
            if ($registro = mysqli_fetch_array($consulta)) {
                
                header("Location: http://localhost/TrabajoPHP/vista/menuListado.php");

            }else{
                header("Location: http://localhost/TrabajoPHP/vista/failLogin.php");
                echo'<br><br><br><center>USUARIO o CONTRASEÑA incorrecto.</center>';
            }
        }
    }
    