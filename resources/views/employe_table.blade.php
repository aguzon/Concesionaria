@extends('layouts.layout')
@section('content')
<!-- Home Page
    ==========================================-->
@include('partes.home_page')
<!-- About Us Page
    ==========================================-->
@include('partes.about')
    <!-- Team Page
    ==========================================-->
@include('partes.team')

 <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Administracion <strong>de Empleados</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Actualice los datos del sistema.</em></small>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <h4><strong><input type="button" class="btn btn-danger" value="Usuarios" onClick="window.location.href='table_usuario'"></strong></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <h4><strong><button type="button" class="btn btn-danger" id="employe_table" click="location='table_employe'">Empleados</button></strong></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">

                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4><strong><input type="button" class="btn btn-danger" value="Areas" onClick="window.location.href='table_area'"></strong></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4><strong><input type="button" class="btn btn-danger" value="Departamentos" onClick="window.location.href='table_usuario'"></strong></h4>
                </div>
            </div>
            <div class="space"></div>
            <small><h3><em>Lista de todos los empleados:</em></h3></small>
            <div class="clearfix"></div>
        <table  id="empleados" class="table table-striped table-bordered table table-hover display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Actualizacion</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Actualizacion</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Rocky</td>
                    <td>Balboa</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Rocky</td>
                    <td>Balboa</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Rocky</td>
                    <td>Balboa</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Rocky</td>
                    <td>Balboa</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Rocky</td>
                    <td>Balboa</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Rocky</td>
                    <td>Balboa</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Rocky</td>
                    <td>Balboa</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Rocky</td>
                    <td>Balboa</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Indiana</td>
                    <td>Jones</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Willy</td>
                    <td>Wonka</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
                <tr>
                    <td>Willy</td>
                    <td>Wonka</td>
                    <td>366787231</td>
                    <td>3794357689</td>
                    <td>jujuy 456</td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Actualizar</button></td>
                </tr>
            </tbody>
        </table>
        <div class="space"></div>
        <!-- Indica que hay que tener cuidado con la acción asociada al botón -->
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal3">Agegar Empleado</button>
    </div>
</div>

<!-- Portfolio Section
    ==========================================-->
@include('partes.section_portfolio')

    <!-- Testimonials Section
    ==========================================-->
@include('partes.testimoniales')
 <!-- Contact Section
    ==========================================-->
@include('partes.section_contac')
@include('partes.employe_from')
@endsection


<!-- @section('script')
<script type="text/javascript">
    $(function(){
        $('#agregar_employe').click(function(){
            var apellido = $('#apellido').val();
            var nombre = $('#nombre').val();
            var email = $('#email').val();
            var dni = $('#dni').val();
            var telefono = $('#telefono').val();
            var area = $('#area').val();
            alert("esto anda");
        });
    });
</script>
@endsection -->
