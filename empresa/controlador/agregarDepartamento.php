<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

      require_once '../modelo/empresa.php';
      require_once '../Modelo/departamentos.php';
      $departamentoAux = new Departamentos($_POST['codigo'], $_POST['nombre']);
      $departamentoAux->insert();
      header("Location: http://localhost/TrabajoPHP/controlador/administrador.php");
