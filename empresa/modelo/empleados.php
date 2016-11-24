<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    class Empleados {
                private $codigo;
                private $nombre;
                private $apellido;
                private $edad;
                private $salario;
                private $comision;
                private $codigoDepartamento;

                function __construct($codigo, $nombre, $apellido, $edad, $salario, $comision, $codigoDepartamento) {
                  $this->codigo = $codigo;
                  $this->nombre = $nombre;
                  $this->apellido = $apellido;
                  $this->edad = $edad;
                  $this->salario = $salario;
                  $this->comision = $comision;
                  $this->codigoDepartamento = $codigoDepartamento;
                }
                public function getCodigo() {
                    return $this->codigo;
                }

                public function getNombre() {
                    return $this->nombre;
                }
                
                public function getApellido() {
                    return $this->apellido;
                }
                
                public function getEdad() {
                    return $this->edad;
                }

                public function getSalario() {
                    return $this->salario;
                }
                
                public function getComision() {
                    return $this->comision;
                }
                
                public function getCodigoDepartamento() {
                    return $this->codigoDepartamento;
                }
                
                public function insert() {
                    $conexion = Empresa::connectDB();
                    $insercion = "INSERT INTO empleado (codigo, nombre, apellido, edad, salario, comision, codigoDepartamento)"
                            . " VALUES (\"".$this->codigo."\", \"".$this->nombre."\", \"".$this->apellido."\", \"".$this->edad."\", \"".$this->salario."\","
                            . "\"".$this->comision."\", \"".$this->codigoDepartamento."\")";
                    $conexion->exec($insercion);
                  }
                  
                  public function update() {
                    $conexion = Empresa::connectDB();
                    $update = "UPDATE empleado SET nombre=\"".$this->nombre."\", apellido=\"".$this->apellido."\", edad=\"".$this->edad."\","
                            . " salario=\"".$this->salario."\", comision=\"".$this->comision."\", codigoDepartamento=\"".$this->codigoDepartamento."\""
                            . " WHERE codigo=\"$this->codigo\"";
                    $conexion->exec($update);
                  }

                  public function delete() {
                    $conexion = Empresa::connectDB();
                    $borrado = "DELETE FROM empleado WHERE codigo=\"".$this->codigo."\"";
                    $conexion->exec($borrado);
                  }

                public static function getEmpleados() {
                    $conexion = Empresa::connectDB();
                    $seleccion = "SELECT codigo, nombre, apellido, edad, salario, comision, codigoDepartamento FROM empleado ";
                    $consulta = $conexion->query($seleccion);

                    $empleados = [];

                    while ($registro = $consulta->fetchObject()) {
                      $empleados[] = new Empleados($registro->codigo, $registro->nombre, $registro->apellido,
                              $registro->edad, $registro->salario, $registro->comision, $registro->codigoDepartamento);
                    }
                    return $empleados;   
                    
                  }
            }