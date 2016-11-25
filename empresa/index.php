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
    <meta charset="utf-8">
    <title>Pagina principal</title>
  </head>
  <body>
    <?php
        header("Location: http://localhost/TrabajoPHP/vista/login.php");
    ?>
  </body>
</html>
