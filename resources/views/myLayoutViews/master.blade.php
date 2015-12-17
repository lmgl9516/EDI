<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- important -->
        <meta name="_token" content="{!! csrf_token() !!}"/>

        <title>Segundo Encuentro de Alimentos y Bebidas</title>
        
        <!-- App icon-->
        <link rel="shortcut icon" type="image/x-icon" href=""/>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

        <!-- font awesome -->
        <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.css') }}">

        <!-- animations -->
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">

        <!-- Sweet Alert -->
        <link href="{{ URL::asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

        <!-- template css     -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

        @yield('styles')
    </head>

    <body>
        @yield('content')
    </body>

    <!-- AJAX 1.11.2 CDN-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- jQuery-->
    <script src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>

    <!-- Bootstrap-->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    
    <!-- Sweet alert -->
    <script src="{{ URL::asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- important -->
    <script type="text/javascript">
        $.ajaxSetup
        ({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        
    </script>

    @yield('scripts')
</html>