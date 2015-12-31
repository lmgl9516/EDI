@extends('myLayoutViews.master')

@section('styles')
<style>
img
{
  max-width:100%;
}
@media screen and (max-width: 700px){
.Empresa{
font-size:22px;
}
.url{
 font-size:16px;   
}
}
/* Por debajo de 400px */
@media screen and (max-width: 400px){
.Empresa{
font-size:18px;
}
.url{
 font-size:11px;   
}
}
</style>
@stop

@section('content')
    <div class="container">
        <div class = "row">  
            <div class="col-md-7">
                <h2>Organizadores</h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 text-center">
                <img src="http://placehold.it/200x200" class="img-rounded">
            </div>
            <div class="col-xs-6 col-sm-6">
                <h1 class="Empresa"><a href="#"><strong>GS1</strong></a></h1>
                <h2 class="url"><a href="#">http://www.gs1mexico.org/</a></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 text-center">
                <img src="http://placehold.it/200x200" class="img-rounded">
            </div>
            <div class="col-xs-6 col-sm-6">
                <h1 class="Empresa"><a href="#"><strong>GS1</strong></a></h1>
                <h2 class="url"><a href="#">http://www.gs1mexico.org/</a></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 text-center">
                <img src="http://placehold.it/200x200" class="img-rounded">
            </div>
            <div class="col-xs-6 col-sm-6">
                <h1 class="Empresa"><a href="#"><strong>GS1</strong></a></h1>
                <h2 class="url"><a href="#">http://www.gs1mexico.org/</a></h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class = "row">  
            <div class="col-md-7">
                <h2>Patrocinadores</h2>
            </div>
        </div>
    </div>   
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 text-center">
                <img src="http://placehold.it/200x200" class="img-rounded">
            </div>
            <div class="col-xs-6 col-sm-6">
                <h1 class="Empresa"><a href="#"><strong>GS1</strong></a></h1>
                <h2 class="url"><a href="#">http://www.gs1mexico.org/</a></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 text-center">
                <img src="http://placehold.it/200x200" class="img-rounded">
            </div>
            <div class="col-xs-6 col-sm-6">
                <h1 class="Empresa"><a href="#"><strong>GS1</strong></a></h1>
                <h2 class="url"><a href="#">http://www.gs1mexico.org/</a></h2>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@stop