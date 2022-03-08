<?php

    //Definicion de Ruta del Sitio (URL)
    function conexion($db_config){
        try{
            $conexion = new PDO('mysql:host=localhost:33065;dbname='.$db_config['basedatos'],$db_config['usuario'],$db_config['password']);
            return $conexion;
        }catch (PDOException $e){
            return false;
        }
    }
?>