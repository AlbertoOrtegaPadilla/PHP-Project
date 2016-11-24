<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LISTADO DEPARTAMENTOS</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body class="white">
        <?php      
            if($_SESSION['user'] == "administrador"){
        ?>            
                    <input class="btn btn-danger" value="MENU" name="submit" type="button" onclick="location.href = '../vista/menuListado.php';" />
                    <input class="btn btn-warning" value="LOGIN" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br><br>
                    <table class="table table-striped">
                        <tr>
                            <th>CODIGO</th>
                            <th>NOMBRE  DEPARTAMENTO</th>
                        </tr> 
                        <tr>
                                <form action="../controlador/agregarDepartamento.php" method="POST">
                                    <td><input class="espacio form-control" type="number" name="codigo"></td>
                                    <td><input class="espacio form-control" type="text" name="nombre"><br></td>
                                    <td><button class="btn btn-success" type="submit" name="accion" value="Añadir">Añadir</button></td>
                                </form>
                            
                        </tr>
        <?php
                    foreach($data['Empresa'] as $departamentos)  {
        ?>
                        <tr>  
                            <td><b><?=$departamentos->getCodigo()?></b></td>
                            <td><b><?=$departamentos->getNombre()?></b></td>
                            <td>
                                <form action="../vista/modificarDepartamento.php" method="POST">
                                    <input type="hidden" name="codigo" value="<?=$departamentos->getCodigo()?>">
                                    <input type="hidden" name="nombre" value="<?=$departamentos->getNombre()?>">
                                    <button class="btn btn-primary" type="submit" name="accion" value="Modificar">Modificar</button>
                                </form>
                            </td>
                            <td>
                                <form action="../controlador/borrarDepartamento.php" method="POST">
                                    <input type="hidden" name="codigo" value="<?=$departamentos->getCodigo()?>">
                                    <button class="btn btn-default" type="submit" name="accion" value="Borrar">Borrar</button>
                                </form>
                            </td>
                        </tr>    
        <?php
                    }
        ?>        
                    </table>              
        <?php
            }else{
              ?>       
                    <input class="btn btn-danger" value="MENU" name="submit" type="button" onclick="location.href = '../vista/menuListado.php';" />
                    <input class="btn btn-warning" value="LOGIN" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br><br>
                    <table class="table table-striped">
                        <tr>
                            <th>CODIGO</th>
                            <th>NOMBRE  DEPARTAMENTO</th>
                        </tr> 
                        <tr>
                                <form action="../controlador/agregarDepartamento.php" method="POST">
                                    <td><input class="espacio form-control" type="number" name="codigo"></td>
                                    <td><input class="espacio form-control" type="text" name="nombre"><br></td>
                                    <td><button class="btn btn-success" type="submit" name="accion" value="Añadir">Añadir</button></td>
                                </form>
                            
                        </tr>
        <?php
                    foreach($data['Empresa'] as $departamentos)  {
        ?>
                        <tr>  
                            <td><b><?=$departamentos->getCodigo()?></b></td>
                            <td><b><?=$departamentos->getNombre()?></b></td>
                            <td>
                                <form action="../vista/modificarDepartamento.php" method="POST">
                                    <input type="hidden" name="codigo" value="<?=$departamentos->getCodigo()?>">
                                    <input type="hidden" name="nombre" value="<?=$departamentos->getNombre()?>">
                                    <button class="btn btn-primary" type="submit" name="accion" value="Modificar">Modificar</button>
                                </form>
                            </td>
                        </tr>  
        <?php  
                    }   
        ?>
                    </table>
        <?php  
            }      
        ?>
    </body>
</html>
