@extends('myLayoutViews.master')

@section('styles')
<style>
.ibox-content
{
	background-color: transparent;
	border-style: none;

}
</style>
<link rel="stylesheet" href="{{ URL::asset('css/patrocinadores-style.css') }}">
@stop

@section('content')
<div style="padding: 0 15px">
	<div class="row wrapper page-heading" style="padding-left: 0px">
		<div id="title-head" class="col-lg-3" style="box-shadow: 0px 5px 10px rgba(0,0,0,0.5);">
			<h2 style="font-weight: 500">PLAN DE TRABAJO</h2>
		</div>
	</div>
	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-content" id="ibox-content">

					<div id="vertical-timeline" class="vertical-container light-timeline">
						<div class="vertical-timeline-block">
							<div class="vertical-timeline-icon navy-bg">
								<i class="fa fa-briefcase"></i>
							</div>

							<div class="vertical-timeline-content">
								<h2>Meeting</h2>
								<p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the sale.
								</p>
								<a href="#" class="btn btn-ipade btn-primary"> More info</a>
								<span class="vertical-date">
									Today <br/>
									<small>Dec 24</small>
								</span>
							</div>
						</div>

						<div class="vertical-timeline-block">
							<div class="vertical-timeline-icon blue-bg">
								<i class="fa fa-file-text"></i>
							</div>

							<div class="vertical-timeline-content">
								<h2>Send documents to Mike</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
								<a href="#" class="btn btn-ipade btn-success"> Download document </a>
								<span class="vertical-date">
									Today <br/>
									<small>Dec 24</small>
								</span>
							</div>
						</div>

						<div class="vertical-timeline-block">
							<div class="vertical-timeline-icon lazur-bg">
								<i class="fa fa-coffee"></i>
							</div>

							<div class="vertical-timeline-content">
								<h2>Coffee Break</h2>
								<p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. </p>
								<a href="#" class="btn btn-ipade btn-info">Read more</a>
								<span class="vertical-date"> Yesterday <br/><small>Dec 23</small></span>
							</div>
						</div>

						<div class="vertical-timeline-block">
							<div class="vertical-timeline-icon yellow-bg">
								<i class="fa fa-phone"></i>
							</div>

							<div class="vertical-timeline-content">
								<h2>Phone with Jeronimo</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
								<span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
							</div>
						</div>

						<div class="vertical-timeline-block">
							<div class="vertical-timeline-icon lazur-bg">
								<i class="fa fa-user-md"></i>
							</div>

							<div class="vertical-timeline-content">
								<h2>Go to the doctor dr Smith</h2>
								<p>Find some issue and go to doctor. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
								<span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
							</div>
						</div>

						<div class="vertical-timeline-block">
							<div class="vertical-timeline-icon navy-bg">
								<i class="fa fa-comments"></i>
							</div>

							<div class="vertical-timeline-content">
								<h2>Chat with Monica and Sandra</h2>
								<p>Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
								<span class="vertical-date">Yesterday <br/><small>Dec 23</small></span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('scripts')
<script>
function mpDisableConferences()
{
	//obtener hora actual
	//desabilitar coloreado de gris
	//logica de foobar
}
$(document).ready(function()
{
	mpDisableConferences();
});
</script>
@stop



