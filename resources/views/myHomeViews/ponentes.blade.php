@extends('myLayoutViews.master')

@section('styles')
    <style>
    .down-shadow
    {
        box-shadow: 0px 5px 10px rgba(0,0,0,0.5)
    }
    .diagonal-shadow
    {
        box-shadow: 5px 5px 10px rgba(0,0,0,0.5)
    }
</style>
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-navbar.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-patrocinadores.css') }}">
@stop

@section('content')
@include('myIncludeViews.sidebar')
<div style="padding: 0 15px">
    <div class="row wrapper page-heading" style="padding-left: 0px;">
        <div id="title-head" class="col-lg-3 down-shadow">
            <h2 style="font-weight: 500">PONENTES</h2>
        </div>
    </div>
<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                        <div class="font-bold">Graphics designer</div>
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
            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Alex Johnatan</strong></h3>

                        <div class="font-bold">CEO</div>
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
            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Monica Smith</strong></h3>

                        <div class="font-bold">Marketing manager</div>
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
            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Michael Zimber</strong></h3>

                        <div class="font-bold">Sales manager</div>
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
            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Sandra Smith</strong></h3>

                        <div class="font-bold">Graphics designer</div>
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

            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Janet Carton</strong></h3>

                        <div class="font-bold">CFO</div>
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

            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Janet Carton</strong></h3>

                        <div class="font-bold">CFO</div>
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

            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Janet Carton</strong></h3>

                        <div class="font-bold">CFO</div>
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

            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Janet Carton</strong></h3>

                        <div class="font-bold">CFO</div>
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

            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Janet Carton</strong></h3>

                        <div class="font-bold">CFO</div>
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

            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Janet Carton</strong></h3>

                        <div class="font-bold">CFO</div>
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

            <div class="col-lg-3">
                <div class="contact-box center-version diagonal-shadow">

                    <a href="profile.html">

                        <img alt="image" class="img-circle diagonal-shadow" src="http://placehold.it/300x300">


                        <h3 class="m-b-xs"><strong>Janet Carton</strong></h3>

                        <div class="font-bold">CFO</div>
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


        </div>
        </div>
</div>

@stop

@section('scripts')
<script src="{{ URL::asset('js/edi/script-sidebar.js') }}"></script>
@stop
   