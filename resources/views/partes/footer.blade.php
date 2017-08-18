<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014. Designed by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Agustin Zoni</a> and Coded by <a href="https://dribbble.com/jennpereira">Jenn Pereira</a></p>
        </div>
        <div class="pull-right fnav">
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->
    <!--<script type="text/javascript" src="js/jquery.1.11.1.js"></script>-->
    {!!Html::script('js/jquery.1.11.1.js')!!}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script type="text/javascript" src="js/bootstrap.js"></script>-->
    {!!Html::script('js/bootstrap.js')!!}
    <!--<script type="text/javascript" src="js/SmoothScroll.js"></script>-->
    {!!Html::script('js/SmoothScroll.js')!!}
    <!--<script type="text/javascript" src="js/jquery.isotope.js"></script>-->
    {!!Html::script('js/jquery.isotope.js')!!}

    <!--<script src="js/owl.carousel.js"></script>-->
    {!!Html::script('js/owl.carousel.js')!!}
    <!-- Javascripts
    ================================================== -->
    <!--<script type="text/javascript" src="js/main.js"></script>-->
    {!!Html::script('js/main.js')!!}
    <!-- ***************************** DATA TABLE *************************-->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#empleados').DataTable({
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    } );
</script>
    <!-- <script type="text/javascript" src="js/dataTables.min"></script>  js del data table -->
    {!! Html::script('js/dataTables.min.js') !!}
  </body>
</html>