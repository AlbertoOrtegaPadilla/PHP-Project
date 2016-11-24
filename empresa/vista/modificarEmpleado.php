<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $salario = $_POST['salario'];
            $comision = $_POST['comision'];
            $codigoDepertamento = $_POST['codigoDepartamento'];
            
            if (isset($codigo)) {
               $_SESSION['codigo'] = $codigo;
               $_SESSION['nombre'] = $nombre;
               $_SESSION['apellido'] = $apellido;
               $_SESSION['edad'] = $edad;
               $_SESSION['salario'] = $salario;
               $_SESSION['comision'] = $comision;
               $_SESSION['codigoDepartamento'] = $codigoDepertamento;
            }
            
          ?>
        <input class="btn btn-danger" value="MENU" name="submit" type="button" onclick="location.href = 'menuListado.php';" />
        <input class="btn btn-danger" value="LISTADO EMPLEADO" name="submit" type="button" onclick="location.href = '../controlador/administrador.php';" />
        <input class="btn btn-warning" value="LOGIN" name="submit" type="button" onclick="location.href = 'login.php';" />
                
        <div class="caja3">
            <form action="../controlador/modificarEmpleado.php" method="post">
                <div class="form-group">
                  <label>CODIGO:</label>
                  <input id="disable" class="form-control" input type="text" name="codigo" value="<?=$_SESSION['codigo']?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label>NOMBRE:</label>
                  <input class="form-control" type="text" name="nombre" value="<?=$_SESSION['nombre']?>">
                </div>
                <div class="form-group">
                  <label>APELLIDO:</label>
                  <input class="form-control" type="text" name="apellido" value="<?=$_SESSION['apellido']?>">
                </div>
                <div class="form-group">
                  <label>EDAD:</label>
                  <input class="form-control" type="number" name="edad" value="<?=$_SESSION['edad']?>">
                </div>
                <div class="form-group">
                  <label>SALARIO:</label>
                  <input class="form-control" <input type="number" name="salario" value="<?=$_SESSION['salario']?>">
                </div>
                <div class="form-group">
                  <label>COMISION:</label>
                  <input class="form-control" type="number" name="comision" value="<?=$_SESSION['comision']?>">
                </div>
                <div class="form-group">
                  <label>CODIGO DEPARTAMENTO:</label>
                  <input class="form-control" type="number" name="codigoDepartamento" value="<?=$_SESSION['codigoDepartamento']?>">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
    </body>
</html>
