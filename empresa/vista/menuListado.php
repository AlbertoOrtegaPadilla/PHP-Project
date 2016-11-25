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
        <title>MENU</title>
    </head>
    <body>
        <?php
            require_once '../Modelo/usuarios.php';
            $data['Empresa'] = Usuario::getUsuarios();
            foreach($data['Empresa'] as $usuarios)  {
                if($_SESSION['user'] == "administrador" && $_SESSION['user'] == $usuarios->getUsuario()
                    && $_SESSION['password'] == $usuarios->getPassword()){
        ?>
                <input value="LOGIN" class="btn btn-warning" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br><br>
                <div>
                    <div><h1>NOMBRE EMPRESA</h1></div><br><br>
                       <div >

                         <form action="../controlador/administrador.php" method="POST">
                           <div class="acceso1">
                             <h3>Listado Empleado:</h3>
                             <input class="btn btn-primary" id="btn2" value="EMPLEADO" name="submit" type="submit"/>
                           </div>
                           <div class="acceso2">
                             <h3>Listado Departamento:</h3>
                             <input class="btn btn-primary" id="btn2a" value="DEPARTAMENTO" name="submit" type="submit"/>
                           </div>
                            <div class="acceso3">
                              <h3>Listado Usuario:</h3>
                              <input class="btn btn-primary" id="btn2b" value="USUARIO" name="submit" type="submit" />
                            </div>
                            <br>
                         </form>
                       </div>
                </div>
        <?php
                    }else if ($_SESSION['user'] != "administrador" && $_SESSION['user'] == $usuarios->getUsuario()
                        && $_SESSION['password'] == $usuarios->getPassword()){

        ?>
                        <input value="LOGIN" class="btn btn-warning" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br><br>
                        <div>
                            <div><h1>NOMBRE EMPRESA</h1></div><br><br><br><br>
                               <div >
                                 <form action="../controlador/administrador.php" method="POST">
                                   <div class="acceso4">
                                     <h3>Listado Empleado:</h3>
                                     <input class="btn btn-primary" id="btn2" value="EMPLEADO" name="submit" type="submit"/>
                                   </div>
                                   <div class="acceso5">
                                     <h3>Listado Departamento:</h3>
                                     <input class="btn btn-primary" id="btn2" value="DEPARTAMENTO" name="submit" type="submit"/>
                                   </div>
                                 </form>
                               </div>
                        </div>
        <?php
                    }
            }
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
        <script src="js/bootstrap.min.js"></script>  
    </body>
</html>
