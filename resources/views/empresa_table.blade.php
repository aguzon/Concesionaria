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
                    <h4><strong><input type="button" class="btn btn-danger" value="Clientes" onClick="window.location.href='table_cliente'"></strong></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <h4><strong><button type="button" class="btn btn-danger" id="employe_table" click="location='table_employe'">Empleados</button></strong></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">

                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4><strong><input type="button" class="btn btn-danger" value="Areas" onClick="window.location.href='table_cliente'"></strong></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-street-view" aria-hidden="true"></i>
                    <h4><strong><button type="button" class="btn btn-danger" id="">Departamentos</button></strong></h4>
                </div>
            </div>
            <div class="space"></div>
            <small><h3><em>Lista de todos los empleados:</em></h3></small>
            <div class="clearfix"></div>
        <table  id="example" class="table table-striped table-bordered table table-hover display" cellspacing="0" width="100%">
        </table>
        <div class="space"></div>
        <!-- Indica que hay que tener cuidado con la acción asociada al botón -->
            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modal5">Agegar Empresa</button>
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
@include('partes.empresa_from')
@endsection

@section('script')
  <script>
    $(function() {
        lista();
    });
      function lista(){
        $('#example').empty();
        var table = $("#example").DataTable({
            "destroy":true,
            "order": [[ 0, "asc" ]],
            "lengthChange": true,
            "language":{
                "url":"public/assets/js/Spanish.json"
            },
            "ajax":{
                "method": "GET",
                "url":"{{url('get_areas')}}",
                "dataType":"JSON"
            },
            "columns":[
                {"data": "id", "title":"#"},
                {"data": "nombre", "title":"Nombre"},
                {"data": "informacion", "title":"Informacion"},
                {"data": "email", "title":"E-mail"},
                {"data": "telefono", "title":"Telefono"},
                {"data":null,"title":"Editar",
                "defaultContent":"<button type='button' id='editar' class='editar btn btn-warning' data-toggle='modal' data-target='#myModal1'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Editar</button>"
                },
                {"data":null,"title":"Eliminar",
                "defaultContent":"<button type='button' id='eliminar' class='eliminar btn btn-link'> Eliminar</button>"
                }
            ]
        });
    }
  </script>
@endsection
{{-- @section('script')
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
@endsection --}}