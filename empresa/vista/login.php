<!DOCTYPE html>

<!-- Las vistas, como su nombre nos hace entender, contienen el código de nuestra
aplicación que va a producir la visualización de las interfaces de usuario, o sea,
el código que nos permitirá renderizar los estados de nuestra aplicación en HTML.
En las vistas nada más tenemos los códigos HTML y PHP que nos permite mostrar la
salida.-->

<!-- En la vista generalmente trabajamos con los datos, sin embargo, no se realiza
un acceso directo a éstos. Las vistas requerirán los datos a los modelos y ellas
se generará la salida, tal como nuestra aplicación requiera. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceso a la pagina</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        //
            //Este paso es para desconectar al usuario.
            session_start();
            session_destroy();
        ?>
            <h1>NOMBRE EMPRESA</h1>
            <hr>        
            <div class="caja">
              <form class="form-horizontal" action="../controlador/login.php" method="POST">
                <legend>LOGIN</legend>
                <div class="form-group">
                    <label id="usuario" class="col-sm-2 control-label" for="inputUsuario">Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" id="inputUsuario" class="form-control" name="usuario"  placeholder="Usuario" required>
                    </div>
                </div>
                  <br>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="inputPassword">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" id="inputPassword" placeholder="Password" required>
                    </div>
                  </div>
                <br>
                <div class="form-group">
                  <div class="controls">
                    <button type="submit" id="btn" class="btn btn-default">Sign in</button>
                    <input type="reset" id="btn" class="btn btn-default" value="Limpiar">
                  </div>
                </div>
              </form>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
        <script src="js/bootstrap.min.js"></script>  
    </body>
</html>
