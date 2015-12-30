@extends('myLayoutViews.master')

@section('styles')
@stop

@section('content')
@include('myIncludeViews.sidebar')
    <div class="container">
        <div class = "row">  
            <div class="col-md-7">
                <h2>Ponentes (Verificar el script,dropdown y la navbar alfabetica)</h2>
            </div>
        </div>
    </div>
    <HR>
        <div class="container">
            <nav class="AlphNav text-center">
              <a href="#A">A</a>
              <a href="#B">B</a>
              <a href="#C">C</a>
              <a href="#D">D</a>
              <a href="#E">E</a>
              <a href="#F">F</a>
              <a href="#G">G</a>
              <a href="#H">H</a>
              <a href="#I">I</a>
              <a href="#J">J</a>
              <a href="#K">K</a>
              <a href="#L">L</a>
              <a href="#M">M</a>
              <a href="#N">N</a>
              <a href="#O">O</a>
              <a href="#P">P</a>
              <a href="#Q">Q</a>
              <a href="#R">R</a>
              <a href="#S">S</a>
              <a href="#T">T</a>
              <a href="#U">U</a>
              <a href="#V">V</a>
              <a href="#W">W</a>
              <a href="#X">X</a>
              <a href="#Y">Y</a>
              <a href="#Z">Z</a>
          </nav>
          <div class="row">
            <div class="col-xs-6 col-md-1"></div>
            <div class="col-xs-6 col-md-7">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Empresa <span class="caret"></span></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Empresa 1</a></li>
                    <li><a href="#">Empresa 2</a></li>
                    <li><a href="#">etc...</a></li></ul>
                </div>
            </div>
        </div>
    </div>
    <HR>
      <div class="Ponentes">
        <section class="Contacto">
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-md-4 text-center">
                <img src="http://ximg.es/200x200/000/fff" class="img-rounded">
              </div>
              <div class="col-xs-6 col-md-6">
                <h2 class="Nombre"><strong>Tio Borges</strong></h2>
                <div class="col-xs-6 col-md-pull-0">
                  <h2 class="text-justify">CEO</h2>
                </div>
                <div class="col-xs-6 col-md-push-0">
                  <img src="http://ximg.es/120x120/000/fff" class="img-rounded">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <HR>
      <div class="Ponentes">
        <section class="Contacto">
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-md-4 text-center">
                <img src="http://ximg.es/200x200/000/fff" class="img-rounded">
              </div>
              <div class="col-xs-6 col-md-6">
                <h2 class="Nombre"><strong>Pio Borges</strong></h2>
                <div class="col-xs-6 col-md-pull-0">
                  <h2 class="text-justify">CEO</h2>
                </div>
                <div class="col-xs-6 col-md-push-0">
                  <img src="http://ximg.es/120x120/000/fff" class="img-rounded">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <HR>
      <div class="Ponentes">
        <section class="Contacto">
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-md-4 text-center">
                <img src="http://ximg.es/200x200/000/fff" class="img-rounded">
              </div>
              <div class="col-xs-6 col-md-6">
                <h2 class="Nombre"><strong>Kio Borges</strong></h2>
                <div class="col-xs-6 col-md-pull-0">
                  <h2 class="text-justify">CEO</h2>
                </div>
                <div class="col-xs-6 col-md-push-0">
                  <img src="http://ximg.es/120x120/000/fff" class="img-rounded">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <HR>
      <div class="Ponentes">
        <section class="Contacto">
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-md-4 text-center">
                <img src="http://ximg.es/200x200/000/fff" class="img-rounded">
              </div>
              <div class="col-xs-6 col-md-6">
                <h2 class="Nombre"><strong>Wio Borges</strong></h2>
                <div class="col-xs-6 col-md-pull-0">
                  <h2 class="text-justify">CEO</h2>
                </div>
                <div class="col-xs-6 col-md-push-0">
                  <img src="http://ximg.es/120x120/000/fff" class="img-rounded">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <HR>
      <div class="Ponentes">
        <section class="Contacto">
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-md-4 text-center">
                <img src="http://ximg.es/200x200/000/fff" class="img-rounded">
              </div>
              <div class="col-xs-6 col-md-6">
                <h2 class="Nombre"><strong>Zio Borges</strong></h2>
                <div class="col-xs-6 col-md-pull-0">
                  <h2 class="text-justify">CEO</h2>
                </div>
                <div class="col-xs-6 col-md-push-0">
                  <img src="http://ximg.es/120x120/000/fff" class="img-rounded">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@stop

@section('scripts')
 <script>
  $('.AlphNav a').click(function(evt) {
  evt.preventDefault();
  
  var $nav = $(this),
      $Contactos = $('.Contacto');
  
  $Contactos.show();
  
  if ($nav.hasClass('active')) {
    $nav.removeClass('active');
  } else {
   $('.AlphNav a').removeClass('active');
    $nav.addClass('active');

    $.each($Contactos, function(key, Contacto) {
      var $Contacto = $(Contacto),
          $NombreContactoo = $Contacto.find('.Nombre'),
          $nameArr = $NombreContactoo.text().split(' ');

      console.log($nameArr[0].split('')[0].toLowerCase());

      if ($nameArr[0].split('')[0].toLowerCase() !== $nav.text().toLowerCase()) {
        $Contacto.hide();
      }
    }); 
  }
});
  </script>
@stop
   