<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
        include '../modelo/empresa.php';
        require_once '../controlador/login.php';

            class Usuario {
                private $id;
                private $nombre;
                private $apellido;
                private $usuario;
                private $password;

                function __construct($id, $nombre, $apellido, $usuario, $password) {
                  $this->id = $id;
                  $this->nombre = $nombre;
                  $this->apellido = $apellido;
                  $this->usuario = $usuario;
                  $this->password = $password;
                }
                public function getId() {
                    return $this->id;
                  }
                public function getNombre() {
                    return $this->nombre;
                }

                public function getApellido() {
                    return $this->apellido;
                }

                public function getUsuario() {
                    return $this->usuario;
                }  

                public function getPassword() {
                    return $this->password;
                }  
                
                public function insert() {
                    $conexion = Empresa::connectDB();
                    $insercion = "INSERT INTO usuario (id, nombre, apellido, usuario, password)"
                            . " VALUES (\"".$this->id."\", \"".$this->nombre."\", \"".$this->apellido."\", \"".$this->usuario."\", \"".$this->password."\")";
                    $conexion->exec($insercion);
                  }
                  
                  public function update() {
                    $conexion = Empresa::connectDB();
                    $update = "UPDATE usuario SET nombre=\"".$this->nombre."\", apellido=\"".$this->apellido."\", password=\"".$this->password."\" WHERE id=\"$this->id\"";
                    $conexion->exec($update);
                  }

                  public function delete() {
                    $conexion = Empresa::connectDB();
                    $borrado = "DELETE FROM usuario WHERE id=\"".$this->id."\"";
                    $conexion->exec($borrado);
                  }
                
                public static function getUsuarios() {
                    $conexion = Empresa::connectDB();
                    $seleccion = "SELECT id, nombre, apellido, usuario, password FROM usuario";
                    $consulta = $conexion->query($seleccion);

                    $usuarios = [];

                    while ($registro = $consulta->fetchObject()) {
                      $usuarios[] = new Usuario($registro->id, $registro->nombre, $registro->apellido, $registro->usuario, $registro->password);
                    }
                   
                    return $usuarios; 
                    
                  }
            }
        

