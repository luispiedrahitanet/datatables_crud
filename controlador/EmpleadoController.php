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



