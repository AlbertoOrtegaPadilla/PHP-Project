<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

    abstract class Empresa {
      private static $server = 'localhost';
      private static $db = 'u906243260_emp';
      private static $user = 'u906243260_root';
      private static $password = 'usuario';

      public static function connectDB() {
        try {
          $connection = new PDO("mysql:host=".self::$server.";dbname=".self::$db.";charset=utf8",
                self::$user, self::$password);
        } catch (PDOException $e) {
          echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
          die ("Error: " . $e->getMessage());
        }
        return $connection;
        
        }
      }

