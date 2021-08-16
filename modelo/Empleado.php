<?php

// usando sqli

include_once('conexion.php');

class Empleado{
    
    var $empleados;

    public function __construct(){
        $this->acceso = Conexion::conectar();
    }

    function mostrar(){
        $sql = "SELECT * FROM employees limit 10000";                // creamos la cadena sql
        $resultado = $this->acceso->query($sql);                    // ejecutamos la consulta sql y lo asignamos a una variable
        $this->empleados = $resultado->fetch_all(MYSQLI_ASSOC);     // asignamos a la variable global el objeto con el resultado de la consulta
        
        return $this->empleados;                                    // retornamos la variable global
    }
} 