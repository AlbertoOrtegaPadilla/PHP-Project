<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    require_once '../modelo/empresa.php';
    require_once '../modelo/empleados.php';
    $empleadoAux = new Empleados($_POST['codigo']);
    $empleadoAux->delete();
    header("Location: administrador.php");

