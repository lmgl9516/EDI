@extends('myLayoutViews.master')

@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/plugins/slick/slick-theme.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/plugins/slick/slick.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-navbar.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-patrocinadores.css') }}">
<style>
.slick_demo_2 .ibox-content {
  margin: 0 10px;
}
</style>
@stop

@section('content')

@include('myIncludeViews.sidebar')

   <div class="container">
      <h1>Hello, {{Auth::user()->email}}</h1>
      <a href="{{URL::action('LoginController@mpLogoutUser')}}">
        <button class="btn btn-success">Logout</button>
      </a>
   </div>   

  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">


        <h4 class="text-center m">
            Multiple example with responsive breakpoints
        </h4>



        <div class="slick_demo_2">

            <div>
                <div id="carousel-box" class="ibox-content">
                    <h2>Slide 1</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap.
                    </p>
                </div>
            </div>
            <div>
                <div id="carousel-box" class="ibox-content">
                    <h2>Slide 2</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap.
                    </p>
                </div>
            </div>
            <div>
                <div id="carousel-box" class="ibox-content">
                    <h2>Slide 3</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap.
                    </p>
                </div>
            </div>
            <div>
                <div id="carousel-box" class="ibox-content">
                    <h2>Slide 4</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap.
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="ibox">
        <h4 class="text-center m">
          Basic example of slick carousel
        </h4>
        <div class="slick_demo_1">

          <div>
            <div class="ibox-content">
              <h2>Slide 1</h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only five centuries, but also the leap.
              </p>
            </div>
          </div>
          <div>
            <div class="ibox-content">
              <h2>Slide 2</h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only five centuries, but also the leap.
              </p>
            </div>
          </div>
          <div>
            <div class="ibox-content">
              <h2>Slide 3</h2>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only five centuries, but also the leap.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	
@stop

@section('scripts')
<script src="{{ URL::asset('js/edi/script-sidebar.js') }}"></script>
<script src="{{ URL::asset('js/plugins/slick/slick.min.js') }}"></script>
 <script>
        $(document).ready(function(){


            $('.slick_demo_1').slick({
                dots: true
            });

            $('.slick_demo_2').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

    </script>
@stop
   
   