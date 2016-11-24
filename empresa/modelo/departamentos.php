<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

    class Departamentos {
                private $codigo;
                private $nombre;

                function __construct($codigo, $nombre) {
                  $this->codigo = $codigo;
                  $this->nombre = $nombre;
                }
                
                public function getCodigo() {
                    return $this->codigo;
                }

                public function getNombre() {
                    return $this->nombre;
                }
                
                public function insert() {
                    $conexion = Empresa::connectDB();
                    $insercion = "INSERT INTO departamento (codigo, nombre) VALUES (\"".$this->codigo."\", \"".$this->nombre."\")";
                    $conexion->exec($insercion);
                  }
                  
                  public function update() {
                    $conexion = Empresa::connectDB();
                    $update = "UPDATE departamento SET nombre=\"".$this->nombre."\" WHERE codigo=\"$this->codigo\"";
                                                                                     
                    $conexion->exec($update);
                  }

                  public function delete() {
                    $conexion = Empresa::connectDB();
                    $borrado = "DELETE FROM departamento WHERE codigo=\"".$this->codigo."\"";
                    $conexion->exec($borrado);
                  }
                
                public static function getDepartamentos() {
                    
                    $conexion = Empresa::connectDB();
                    $seleccion = "SELECT nombre, codigo FROM departamento ";
                    $consulta = $conexion->query($seleccion);

                    $departamentos = [];

                    while ($registro = $consulta->fetchObject()) {
                      $departamentos[] = new Departamentos($registro->codigo, $registro->nombre);
                    }
                    return $departamentos;    
                }
                
                
            }
