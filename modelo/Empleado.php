<?php

// usando sqli

include_once('conexion.php');

class Empleado{
    
    var $empleados;

    public function __construct(){
        $this->acceso = Conexion::conectar();
    }


    function mostrar(){
        $sql = "SELECT * FROM employees";                           // creamos la cadena sql
        $resultado = $this->acceso->query($sql);                    // ejecutamos la consulta sql y lo asignamos a una variable
        $this->empleados = $resultado->fetch_all(MYSQLI_ASSOC);     // asignamos a la variable global el objeto con el resultado de la consulta
        
        return $this->empleados;                                    // retornamos la variable global
    }


    function editar($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date){
        $sql = "UPDATE employees SET birth_date='$birth_date', first_name='$first_name', last_name='$last_name', gender='$gender', hire_date='$hire_date' WHERE emp_no='$emp_no'";
        $resultado = $this->acceso->query($sql);
    }


    function eliminar($emp_no){
        $sql = "DELETE FROM employees WHERE emp_no='$emp_no'";
        $resultado = $this->acceso->query($sql);
    }


    function nuevo($birth_date,$first_name,$last_name,$gender,$hire_date){
        $sql = "INSERT INTO employees (birth_date,first_name,last_name,gender,hire_date) VALUES ('$birth_date','$first_name','$last_name','$gender','$hire_date')";
        $resultado = $this->acceso->query($sql);
    }

} 