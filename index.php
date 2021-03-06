<!DOCTYPE html>
<html lang="es">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Datatables</title>
       <link rel="stylesheet" href="lib/bootstrap.min.css">
       <link rel="stylesheet" href="lib/datatables.min.css">
       <link rel="stylesheet" href="lib/fontawesome/all.min.css">
       <link rel="stylesheet" href="lib/gijgo/gijgo.min.css">
</head>
<body>

        <!-- Modal Nuevo -->
        <div class="modal fade" id="nuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form id="form-nuevo">
                        <div class="form-group">
                            <label for="">F. Nacimiento: </label>
                            <input type="text" id="nuevo_nacimiento" class="form-control" required>
                        </div>
                        <div class="form-group">
                             <label for="">Nombre: </label>
                            <input type="text" id="nuevo_nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Apellido: </label>
                           <input type="text" id="nuevo_apellido" class="form-control" required>
                       </div>
                       <div class="form-group">
                             <label for="">Género: </label>
                             <select id="nuevo_genero" class="form-control">
                                 <option value="M">M</option>
                                 <option value="F">F</option>
                             </select>
                        </div>
                        <div class="form-group">
                            <label for="">F. Ingreso: </label>
                           <input type="text" id="nuevo_ingreso" class="form-control"required>
                       </div>
                    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Gardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Fin Modal Nuevo -->
    

    <!-- Modal Editar -->
    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
            <h5 class="modal-title" id="exampleModalLabel">Editar Empleado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form id="form-editar">
                    <input type="hidden" id="id"> <!-- Oculto -->
                    <div class="form-group">
                        <label for="">F. Nacimiento: </label>
                        <input type="text" id="f_nacimiento" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="">Nombre: </label>
                        <input type="text" id="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Apellido: </label>
                       <input type="text" id="apellido" class="form-control">
                   </div>
                   <div class="form-group">
                        <label for="">Género: </label>
                        <select id="genero" class="form-control">
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">F. Ingreso: </label>
                       <input type="text" id="f_ingreso" class="form-control">
                   </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Gardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Modal Editar -->


    <!-- Modal Eliminar -->
    <div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Empleado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form id="form-eliminar">
                    <input type="hidden" id="id_elim">
                    <div class="form-group">
                        <label for=""><strong>F. Nacimiento: </strong></label>
                        <label id="elim_nacimiento"></label>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Nombre: </strong></label>
                        <label id="elim_nombre"></label>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Apellido: </strong></label>
                        <label id="elim_apellido"></label>
                   </div>
                   <div class="form-group">
                         <label for=""><strong>Género: </strong></label>
                         <label id="elim_genero"></label>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>F. Ingreso: </strong></label>
                        <label id="elim_ingreso"></label>
                   </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Modal Eliminar -->


    <div class="container pb-5">

        <div class="jumbotron mt-3 alert alert-primary">
            <h1 class="display-4">DATATABLES</h1>
            <p class="lead">Plugin de Jquery para crear y administrar tablas Html de manera dinámica. <a href="https://datatables.net">https://datatables.net</a></p>
            <hr class="">
            <p>Creado por Luis Piedrahita - <a href="https://github.com/luispiedrahitanet" class="alert-link">https://github.com/luispiedrahitanet</a> </p>
        </div>

        <div class="alert alert-success text-center" role="alert">
            <button type="button" class="btn btn-success btn-sm  shadow" data-toggle="modal" data-target="#nuevo">Nuevo empleado</button>
          </div>

    <div class="table-responsive">
        <table id="miTabla" class="w-100 display table table-hover table-bordered text-nowrap shadow-sm rounded">
            <thead class="rounded">
                <tr>
                    <th>ID</th>
                    <th>F. Nacimiento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Género</th>
                    <th>F. Ingreso</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

        


    </div>

<script src="lib/jquery.min.js"></script>  
<script src="lib/bootstrap.min.js"></script>     
<script src="lib/datatables.min.js"></script>
<script src="lib/fontawesome/all.min.js"></script>
<script src="lib/gijgo/gijgo.min.js"></script>
<script src="lib/gijgo/messages.es-es.js"></script>
<script>
    $(document).ready(function() {

        var funcion = "listar";

        function compararFechas(fechaIni,fechaPos){
            let f_nac = new Date(fechaIni);
            let f_ing = new Date(fechaPos);
            let valor = false;
            if (f_nac > f_ing) {
                valor = true;
            }
            return valor;
        }
        
        let datatable = $('#miTabla').DataTable({
            "ajax": {
                "url": "controlador/EmpleadoController.php",
                "method": "POST",
                "data": {funcion:funcion}
            },
            "columns": [
                { "data": "emp_no" },
                { "data": "birth_date" },
                { "data": "first_name" },
                { "data": "last_name" },
                { "data": "gender" },
                { "data": "hire_date" },
                { "defaultContent": `<a href="#" class="editar text-primary ml-2" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></a>                     
                                     <a href="#" class="eliminar text-danger ml-3" data-toggle="modal" data-target="#eliminar"><i class="fas fa-trash-alt"></i></a>` }
            ],
            "language": {
                url: 'lib/espanol.json'
            }
        });

        // ------------------ EDITAR --------------------------
        $("#miTabla tbody").on("click",".editar", function(){
            let data = datatable.row($(this).parents()).data();
            $("#id").val(data.emp_no);   // campo oculto
            $("#f_nacimiento").val(data.birth_date);
            $("#nombre").val(data.first_name);
            $("#apellido").val(data.last_name);
            $("#genero").val(data.gender);
            $("#f_ingreso").val(data.hire_date);
            //console.log(data);
        });

        $("#form-editar").submit(e=>{
            let emp_no = $("#id").val();
            let birth_date = $("#f_nacimiento").val();
            let first_name = $("#nombre").val();
            let last_name = $("#apellido").val();
            let gender = $("#genero").val();
            let hire_date = $("#f_ingreso").val();

            let comp = compararFechas(birth_date,hire_date);
            if(comp){
                alert("LA FECHA DE NACIMIENTO NO PUEDE SER MAYOR A LA DE INGRESO");
                e.preventDefault();
                return;
            }
            
            funcion = "editar";
            $.post("controlador/EmpleadoController.php",{emp_no,birth_date,first_name,last_name,gender,hire_date,funcion},(response) => {

            });
        });

        // ------------------ ELIMINAR --------------------------
        $("#miTabla tbody").on("click",".eliminar", function(){
            let data = datatable.row($(this).parents()).data();
            $("#id_elim").val(data.emp_no);   // campo oculto
            $("#elim_nacimiento").html(data.birth_date);
            $("#elim_nombre").html(data.first_name);
            $("#elim_apellido").html(data.last_name);
            $("#elim_genero").html(data.gender);
            $("#elim_ingreso").html(data.hire_date);
            //console.log(data);
        });

        $("#form-eliminar").submit(e=>{
            
            let confirmado;
            confirmado = confirm("\nESTÁ A PUNTO DE ELIMININAR ESTE REGISTRO . . . PROCEDO?\n");

            if( confirmado == false ){
                e.preventDefault();
                return;
            }

            let emp_no = $("#id_elim").val();
            
            funcion = "eliminar";
            $.post("controlador/EmpleadoController.php",{emp_no,funcion},(response) => {
                // console.log(response);
            });
            
        });

        // ------------------ NUEVO --------------------------
        $("#form-nuevo").submit(e=>{
            let birth_date = $("#nuevo_nacimiento").val();
            let first_name = $("#nuevo_nombre").val();
            let last_name = $("#nuevo_apellido").val();
            let gender = $("#nuevo_genero").val();
            let hire_date = $("#nuevo_ingreso").val();
            
            let comp = compararFechas(birth_date,hire_date);
            if(comp){
                alert("LA FECHA DE NACIMIENTO NO PUEDE SER MAYOR A LA DE INGRESO");
                e.preventDefault();
                return;
            }

            funcion = "nuevo";
            $.post("controlador/EmpleadoController.php",{birth_date,first_name,last_name,gender,hire_date,funcion},(response)=>{

            });
        });


        
        //------------- FECHAS EDITAR --------------
        $('#f_nacimiento').datepicker({
            format: 'yyyy-mm-dd',
            locale: 'es-es',
            uiLibrary: 'bootstrap4',
            modal: true,
            weekStartDay: 1
        });
        $('#f_ingreso').datepicker({
            format: "yyyy-mm-dd",
            locale: 'es-es',
            uiLibrary: 'bootstrap4',
            modal: true,
            weekStartDay: 1
        });

        //------------- FECHAS NUEVOS --------------
        let hoy = new Date();
        let anio  = hoy.getFullYear();
        let mes = hoy.getMonth() + 1;
        let dia   = hoy.getDate(); 
        let fecha = anio +"-"+ mes +"-"+ dia;
        $('#nuevo_nacimiento').datepicker({
            format: "yyyy-mm-dd",
            locale: 'es-es',
            uiLibrary: 'bootstrap4',
            modal: true,
            weekStartDay: 1,
            value: fecha
        });
        $('#nuevo_ingreso').datepicker({
            format: "yyyy-mm-dd",
            locale: 'es-es',
            uiLibrary: 'bootstrap4',
            modal: true,
            weekStartDay: 1,
            value: fecha
        });

    } );

</script>
</body>
</html>