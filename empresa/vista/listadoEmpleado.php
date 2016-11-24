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
        <title>LISTADO EMPLEADO</title>
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
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>EDAD</th>
                            <th>SALARIO</th>
                            <th>COMISION</th>
                            <th>CODIGO DEPARTAMENTO</th>
                        </tr>  
                        <tr>
                                <form action="../controlador/agregarEmpleado.php" method="POST">
                                    <td><input class="espacio form-control" type="number" name="codigo"></td>
                                    <td><input class="espacio form-control" type="text" name="nombre"></td>
                                    <td><input class="espacio form-control" type="text" name="apellido"></td>
                                    <td><input class="espacio form-control" type="number" name="edad"></td>
                                    <td><input class="espacio form-control" type="number" name="salario"></td>
                                    <td><input class="espacio form-control" type="number" name="comision"></td>
                                    <td><input class="espacio form-control" type="number" name="codigoDepartamento"></td>
                                    <td><button class="btn btn-success" type="submit" name="accion" value="Añadir">Añadir</button></td>
                                </form>
                            
                        </tr>
        <?php
                    foreach($data['Empresa'] as $empleados)  {
        ?>
                        <tr>  
                            <td><b><?=$empleados->getCodigo()?></b></td>
                            <td><b><?=$empleados->getNombre()?></b></td>
                            <td><b><?=$empleados->getApellido()?></b></td>
                            <td><b><?=$empleados->getEdad()?></b></td>
                            <td><b><?=$empleados->getSalario()?></b></td>
                            <td><b><?=$empleados->getComision()?></b></td>
                            <td><b><?=$empleados->getCodigoDepartamento()?></b></td>
                            <td>
                                <form action="../vista/modificarEmpleado.php" method="POST">
                                    <input type="hidden" name="codigo" value="<?=$empleados->getCodigo()?>">
                                    <input type="hidden" name="nombre" value="<?=$empleados->getNombre()?>">
                                    <input type="hidden" name="apellido" value="<?=$empleados->getApellido()?>">
                                    <input type="hidden" name="edad" value="<?=$empleados->getEdad()?>">
                                    <input type="hidden" name="salario" value="<?=$empleados->getSalario()?>">
                                    <input type="hidden" name="comision" value="<?=$empleados->getComision()?>">
                                    <input type="hidden" name="codigoDepartamento" value="<?=$empleados->getCodigoDepartamento()?>">
                                    <button class="btn btn-primary" type="submit" name="accion" value="Modificar">Modificar</button>
                                </form>
                            </td>
                            <td>
                                <form action="../controlador/borrarEmpleado.php" method="POST">
                                    <input type="hidden" name="codigo" value="<?=$empleados->getCodigo()?>">
                                    <button class="btn btn-default" type="submit" name="accion" value="Modificar">Borrar</button>
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
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>EDAD</th>
                            <th>SALARIO</th>
                            <th>COMISION</th>
                            <th>CODIGO DEPARTAMENTO</th>
                        </tr>  
                        <tr>
                                <form action="../controlador/agregarEmpleado.php" method="POST">
                                    <td><input class="espacio form-control" type="number" name="codigo"></td>
                                    <td><input class="espacio form-control" type="text" name="nombre"></td>
                                    <td><input class="espacio form-control" type="text" name="apellido"></td>
                                    <td><input class="espacio form-control" type="number" name="edad"></td>
                                    <td><input class="espacio form-control" type="number" name="salario"></td>
                                    <td><input class="espacio form-control" type="number" name="comision"></td>
                                    <td><input class="espacio form-control" type="number" name="codigoDepartamento"></td>
                                    <td><button class="btn btn-success" type="submit" name="accion" value="Añadir">Añadir</button></td>
                                </form>
                            
                        </tr>
        <?php
                    foreach($data['Empresa'] as $empleados)  {
        ?>
                        <tr>  
                            <td><b><?=$empleados->getCodigo()?></b></td>
                            <td><b><?=$empleados->getNombre()?></b></td>
                            <td><b><?=$empleados->getApellido()?></b></td>
                            <td><b><?=$empleados->getEdad()?></b></td>
                            <td><b><?=$empleados->getSalario()?></b></td>
                            <td><b><?=$empleados->getComision()?></b></td>
                            <td><b><?=$empleados->getCodigoDepartamento()?></b></td>
                            <td>
                                <form action="../vista/modificarEmpleado.php" method="POST">
                                    <input type="hidden" name="codigo" value="<?=$empleados->getCodigo()?>">
                                    <input type="hidden" name="nombre" value="<?=$empleados->getNombre()?>">
                                    <input type="hidden" name="apellido" value="<?=$empleados->getApellido()?>">
                                    <input type="hidden" name="edad" value="<?=$empleados->getEdad()?>">
                                    <input type="hidden" name="salario" value="<?=$empleados->getSalario()?>">
                                    <input type="hidden" name="comision" value="<?=$empleados->getComision()?>">
                                    <input type="hidden" name="codigoDepartamento" value="<?=$empleados->getCodigoDepartamento()?>">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
        <script src="js/bootstrap.min.js"></script>  
    </body>
</html>
