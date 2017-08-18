<!-- Head
    ==========================================-->
@include('partes.head')
    <!-- Navigation
    ==========================================-->

@include('partes.menu')


@yield('content')

 <!-- Footer
    ==========================================-->
@include('partes.footer')
@yield('script')

@include('partes.session_from')
@include('partes.usuario_from')

