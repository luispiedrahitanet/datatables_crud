<?php

// usando sqli

include "../modelo/Empleado.php";

// instanciamos la clase empleado que está en el modelo Empleado
$empleado = new Empleado();


// si la función enviada por el ajax es 'listar'

if( $_POST['funcion'] == 'listar' ){
    // utilizamos el método mostrar de la clase Empleado
    $empleado->mostrar();
    
    // ceamos una variable de tipo array
    $json = array();
    
    // recorremos el resultado de la consulta para asignar datos al array $json
    foreach( $empleado->empleados as $data ){
        $json['data'][] = $data;
    }

    // codificamos el json para enviar por el ajax
    $jsonstring = json_encode($json);
    
    // enviamos la variable con el json codificado
    echo $jsonstring;
}


if( $_POST['funcion'] == 'editar' ){
    // recibimos los datos enviados por el metodo Post de ajax
    $emp_no = $_POST['emp_no'];
    $birth_date = $_POST['birth_date'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $hire_date = $_POST['hire_date'];

    // llamamos al metodo editar del modelo Empleado
    $empleado->editar($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date);
}


if( $_POST['funcion'] == 'eliminar' ){
    // recibimos el id enviados por el metodo Post de ajax
    $emp_no = $_POST['emp_no'];

    // llamamos al metodo editar del modelo Empleado
    $empleado->eliminar($emp_no);
}



