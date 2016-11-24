<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            
            if(isset($codigo)){
                $_SESSION['codigo'] = $codigo;
                $_SESSION['nombre'] = $nombre;
            }
          ?>
        <input class="btn btn-danger" value="MENU" name="submit" type="button" onclick="location.href = 'menuListado.php';" />
        <input class="btn btn-danger" value="LISTADO USUARIO" name="submit" type="button" onclick="location.href = '../controlador/administrador.php';" />
        <input class="btn btn-warning" value="LOGIN" name="submit" type="button" onclick="location.href = 'login.php';" /><br><br>
            
         <div class="caja2">
             <form action="../controlador/modificarDepartamento.php" method="post">
                <div class="form-group">
                  <label>ID:</label>
                  <input id="disable" class="form-control" type="text" name="codigo" value="<?=$_SESSION['codigo']?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label>NOMBRE:</label>
                  <input class="form-control" type="text" name="nombre" value="<?=$_SESSION['nombre']?>">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
        </div>
    </body>
</html>
