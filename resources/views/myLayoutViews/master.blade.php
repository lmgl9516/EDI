<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- important -->
        <meta name="_token" content="{!! csrf_token() !!}"/>

        <title>Segundo Encuentro Sector Alimentos y Bebidas</title>
        
        <!-- App icon-->
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/logos/encuentro-favicon.png') }}">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}">

        <!-- font awesome CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- animations -->
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">

        <!-- Sweet Alert -->
        <link rel="stylesheet" href="{{ URL::asset('css/sweetalert/sweetalert.css') }}">

        <!-- EDI master -->
        <link rel="stylesheet" href="{{ URL::asset('css/edi/style-master.css') }}">

        <!-- EDI master -->
        <link rel="stylesheet" href="{{ URL::asset('css/edi/style-twinbar.css') }}">

        @yield('styles')
    </head>

    <body>
            <!-- hidden checkbox controls -->
            <input type="checkbox" id="left-togglebox">
            <input type="checkbox" id="right-togglebox">

            <div class="left-overlay"><label for="left-togglebox"></label></div>
            <div class="right-overlay"><label for="right-togglebox"></label></div>

            <nav id="left-offcanvas-menu">
                <label for="left-togglebox" id="left-close-x">Close</label>
                <ul>
                    <li style="background: #499DA9; padding: 25px 0px 15px 0px;">
                        <div id="nav-img" style="padding: 10px 60px;">
                        <img src="https://pbs.twimg.com/profile_images/3777388091/b52a9e0da2486de95accae18dd0fa328_400x400.jpeg" class="img-circle img-responsive" style="box-shadow: 0px 5px 10px rgba(0,0,0,0.5);">
                        </div>
                        <p>Emma Stone</p>
                        <h5>Country Business Manager</h5>
                    </li>
                    <div class="text-left" style="padding-left: 15px;">
                        <li><a href="{{ URL::action('MainController@mpGetHome')}}">                  <span class="fa fa-home"             style="margin-right: 18px;"></span> Home</a></li>
                        <li><a href="{{ URL::action('MainController@mpGetWorkPlan')}}">              <span class="fa fa-calendar-check-o" style="margin-right: 18px;"></span> Plan de Trabajo</a></li>
                        <li><a href="{{ URL::action('MainController@mpGetHome')}}">                  <span class="fa fa-bullhorn"         style="margin-right: 18px;"></span> Foro</a></li>
                        <li><a href="{{ URL::action('PollController@mpGetAllPolls')}}">              <span class="fa fa-send"             style="margin-right: 18px;"></span> Encuestas</a></li>
                        <li><a href="{{ URL::action('MainController@mpGetHome')}}">                  <span class="fa fa-envelope"         style="margin-right: 18px;"></span> Asistentes</a></li>
                        <li><a href="{{ URL::action('MainController@mpGetAllSpeakers')}}">           <span class="fa fa-users"            style="margin-right: 18px;"></span> Ponentes</a></li>
                        <li><a href="{{ URL::action('MainController@mpGetOrganizersAndSponsors')}}"> <span class="fa fa-certificate"      style="margin-right: 18px;"></span> Empresas</a></li>
                        <li><a href="{{ URL::action('LoginController@mpLogoutUser')}}">              <span class="fa fa-sign-out"         style="margin-right: 18px;"></span> Cerrar sesión</a></li>
                    </div>
                </ul>
            </nav>

            <nav id="right-offcanvas-menu">
                <label for="right-togglebox" id="right-close-x">Close</label>
                <ul>
                    <?php $counter = 0; $background = 'background: #499DA9';
                     ?>
                    @if (!is_null($miniPlan))
                        @foreach ($miniPlan as $talk)
                            
                            <?php (($counter % 2) == 0) ? $color = $background = 'background: #499DA9' : $background = '' ?>

                            <li class="text-left" style="padding: 15px 25px; {{$background}}">
                                <p> <b> <span class="fa fa-clock-o"></span> {{$talk['hora']}} </b> </p>
                                <p>{{$talk['titulo']}}</p>
                            </li>
                            <?php $counter++ ?>
                        @endforeach
                    @endif
                </ul>
            </nav>

            <div id="content-area">
                <div class="col-md-6 col-sm-6 col-xs-6 navbar-col">
                    <label for="left-togglebox" id="left-hamburguer"></label>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 navbar-col">
                    <label for="right-togglebox" id="right-hamburguer"></label>
                </div>

                @yield('content')
            </div>
    </body>

    <!-- AJAX 1.11.2 CDN-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- jQuery-->
    <script src="{{ URL::asset('js/jquery/jquery-2.1.1.js') }}"></script>

    <!-- Bootstrap-->
    <script src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
    
    <!-- Sweet alert -->
    <script src="{{ URL::asset('js/sweetalert/sweetalert.min.js') }}"></script>

    <!-- important -->
    <script type="text/javascript">
        $.ajaxSetup
        ({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        
    </script>

    @yield('scripts')
</html>