<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Aplicación Login Logout POO Multicapa</h1>
        <?php
        /**
          @author: Bea Merino Macía
          @since: 07/04/2021
          @description: Conexión a la base de datos con la cuenta usuario y tratamiento de errores.
         */
        
        //Fichero de configuración de la BBDD
        require_once 'config/configDB.php';
        
        try {
            //Objeto PDO con los datos de conexión
            $miBD = new PDO(DNS,USER,PASSWORD);

            //Habilito las excepciones
            $miBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //Mensaje que se mostrará si la conexión se realiza correctamente
            echo "<h2 style='color: green'>Conexión realizada correctamente</h2>" . "<br>";
            
            //Array que contiene los atributos del PDO::ATTR 
            $atributos = [ 
                "AUTOCOMMIT", 
                "ERRMODE", 
                "CASE", 
                "CLIENT_VERSION", 
                "CONNECTION_STATUS",
                "ORACLE_NULLS", 
                "PERSISTENT", 
                "SERVER_INFO", 
                "SERVER_VERSION"
            ];
            
            echo "<h2>Atributos de la conexión</h2>";
            //Foreach para recorrer el array de atributos
            foreach ($atributos as $val) { 
                echo "PDO::ATTR_$val: ";
                //Mensaje de salida
                echo $miBD->getAttribute(constant("PDO::ATTR_$val")) . "<br>"; 
            }
            //Captura de la excepción
        } catch (PDOException $mensajeError) { 
            //Mensaje de salida
            echo "<p style='color: red'>Error </p>" . $mensajeError->getMessage() . "<br>"; 
            //Código del error
            echo "<p style='color: red'>Codigo del error </p>" . $mensajeError->getCode() . "<br>"; 
        } finally {
            //Cerramos la conexion
            unset($miBD); 
        }
        ?>
    </body>
</html>