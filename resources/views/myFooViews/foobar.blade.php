@extends('myLayoutViews.master')

@section('styles')
	<style>
		.mini-profile
		{
			width: 48px;
		}
	</style>
@stop

@section('content')

<div id="wrapper">
	
	<!-- side navbar -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-colla	pse">
            <ul class="nav metismenu" id="side-menu">
				
                <li class="nav-header">
                    <div class="dropdown profile-element">
                    		<span>
                            	<img alt="image" class="img-circle mini-profile" src="http://us.cdn01.mundotkm.com/2015/12/emma.jpg" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
	                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Emma Stone</strong></span> 
	                            <span class="text-muted text-xs block">Sexiest Babe <b class="caret"></b></span> </span> 
                        	</a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Logout</a></li>
                            </ul>
                    </div>
                    <div class="logo-element"> IN+ </div>
                </li>

                <li class="special_link active">
                    <a  href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
                </li>
                <li class="special_link">
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of side navbar -->

    <div id="page-wrapper">
        <div class="row border-bottom">

        	<!-- top navbar -->
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </nav> <!-- end of top navbar -->

        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        	<!-- content? -->
        </div>
    </div>
</div>
@stop

@section('scripts')
<!-- Mainly scripts -->
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
@stop

