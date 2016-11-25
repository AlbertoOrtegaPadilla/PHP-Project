<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once '../modelo/empresa.php';
    require_once '../Modelo/empleados.php';
    $empleadoAux = new Empleados($_POST['codigo'], $_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['salario'], $_POST['comision'], $_POST['codigoDepartamento']);
    $empleadoAux->insert();
    header("Location: http://localhost/TrabajoPHP/controlador/administrador.php");
