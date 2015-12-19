@extends('myLayoutViews.master')

@section('styles')
@stop

@section('content')
<div style="padding: 0 15px">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Organizadores</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            @if (!is_null($organizadores))
                @foreach ($organizadores as $organizador)
                <div class="col-lg-{{$widthOrg}}">
                    <div class="contact-box center-version">

                        <a href="#" style="color: #FFF;">
                            <img class="img-circle" style="background: #FFF;" src="{{$organizador->imagen}}">

                            <h3 class="m-b-xs"><strong>{{$organizador->nombre}}</strong></h3>

                            <div class="font-bold">{{$organizador->descripcion}}</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </a>

                        <div class="contact-box-footer">
                            <div class="m-t-xs btn-group">
                                <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top: -40px;">
        <div class="col-lg-9">
            <h2>Patrocinadores</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            @if (!is_null($patrocinadores))
                @foreach ($patrocinadores as $patrocinador)
                <div class="col-lg-{{$widthPat}}">
                    <div class="contact-box center-version">

                        <a href="#" style="color: #FFF;">
                            <img class="img-circle" style="background: #FFF;" src="{{$patrocinador->imagen}}">

                            <h3 class="m-b-xs"><strong>{{$patrocinador->nombre}}</strong></h3>

                            <div class="font-bold">{{$patrocinador->descripcion}}</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </a>

                        <div class="contact-box-footer">
                            <div class="m-t-xs btn-group">
                                <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@stop

