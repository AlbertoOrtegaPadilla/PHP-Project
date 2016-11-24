<?php
    /* Contiene el código necesario para responder a las acciones que se solicitan
    en la aplicación, como visualizar un elemento, realizar una compra, una búsqueda
    de información, etc.

    Sirve de enlace entre las vistas y los modelos, respondiendo a los mecanismos
    que puedan requerirse para implementar las necesidades de nuestra aplicación. 
    Sin embargo, su responsabilidad no es manipular directamente datos, ni mostrar 
    ningún tipo de salida, sino servir de enlace entre los modelos y las vistas para
    implementar las diversas necesidades del desarrollo.*/

    
    session_start(); // Inicio de sesión
    if(!isset($user) && !isset($pass)){
        $user = "nada";
        $pass = "nada";
    }
    
    if(isset($_POST['usuario'])){
        $user = $_POST['usuario'];
        $pass = $_POST['password'];
    }
 
    if ($user != "nada" && $pass != "nada") {

        $_SESSION['user'] = $user;
        $_SESSION['password'] = $pass;
        // La sentencia include incluye y evalúa el archivo especificado
        include '../modelo/conexion.php';
        $empresa = new conexion;
        $empresa->login($user, $pass);
        $empresa->cerrar();
    }
    

    
    
    