<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LISTADO USUARIOS</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body class="white">
        <?php
            foreach($data['Empresa'] as $usuarios)  {
                if($_SESSION['user'] == "administrador" && $_SESSION['user'] == $usuarios->getUsuario()
                    && $_SESSION['password'] == $usuarios->getPassword()){
        ?>            
                    <input class="btn btn-danger" value="MENU" name="submit" type="button" onclick="location.href = '../vista/menuListado.php';" />
                    <input class="btn btn-warning" value="LOGIN" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br><br>
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>USUARIO</th>
                            <th>PASSWORD</th>
                        </tr>   
                        <tr>
                                <form action="../controlador/agregarUsuario.php" method="POST">
                                    <td><input class="espacio form-control" type="number" name="id"></td>
                                    <td><input class="espacio form-control" type="text" name="nombre"></td>
                                    <td><input class="espacio form-control" type="text" name="apellido"></td>
                                    <td><input class="espacio form-control" type="text" name="usuarioo"></td>
                                    <td><input class="espacio form-control" type="text" name="password"></td>
                                    <td><button class="btn btn-success" type="submit" name="accion" value="Añadir">Añadir</button></td>
                                </form>
                            
                        </tr>
        <?php
                    foreach($data['Empresa'] as $usuarios)  {
                        $administrador = $usuarios->getUsuario();
        ?>
                        <tr>  
                            <td><b><?=$usuarios->getId()?></b></td>
                            <td><b><?=$usuarios->getNombre()?></b></td>
                            <td><b><?=$usuarios->getApellido()?></b></td>
                            <td><b><?=$usuarios->getUsuario()?></b></td>
                            <td><b><?=$usuarios->getPassword()?></b></td>
                            <td>
        <?php 
                        if($administrador != "administrador") {      
        ?>
                                <form action="../controlador/borrarUsuarios.php" method="POST">
                                    <input type="hidden" name="id" value="<?=$usuarios->getId()?>">
                                    <button class="btn btn-default" type="submit" name="accion" value="Borrar">Borrar</button>
                                </form>
                            </td>
                        </tr>    
        <?php
                        }
                    }
        ?>        
                    </table>
        <?php
                }
            }
        ?>
    </body>
</html>
