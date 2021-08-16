<?php

// usando mysqli

class Conexion{
    public static function conectar(){
        $conexion = new mysqli('localhost','root','','employees');
        $conexion->set_charset('utf8');
        
        return $conexion;
    }
}