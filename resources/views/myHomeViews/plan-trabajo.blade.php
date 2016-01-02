@extends('myLayoutViews.master')

@section('styles')
<style>
header:after, #timeline .timeline-item:after, header:before, #timeline .timeline-item:before {
  content: '';
  display: block;
  width: 100%;
  clear: both;
}

#timeline {
  width: 100%;
  margin: 30px auto;
  position: relative;
  padding: 0 10px;
}
#timeline:before {
  content: "";
  width: 3px;
  height: 100%;
  background: #ee4d4d;
  left: 50%;
  top: 0;
  position: absolute;
}
#timeline:after {
  content: "";
  clear: both;
  display: table;
  width: 100%;
}
#timeline .timeline-item {
  margin-bottom: 50px;
  position: relative;
}
#timeline .timeline-item .timeline-icon {
  background: #ee4d4d;
  width: 50px;
  height: 50px;
  position: absolute;
  top: 0;
  left: 50%;
  overflow: hidden;
  margin-left: -23px;
  border-radius: 50%;
}
#timeline .timeline-item .timeline-icon svg {
  position: relative;
  top: 14px;
  left: 14px;
}
#timeline .timeline-item .timeline-content {
  width: 45%;
  background: #fff;
  padding: 20px;
  border-radius: 5px;
}
#timeline .timeline-item .timeline-content h2 {
  padding: 15px;
  background: #ee4d4d;
  color: #fff;
  margin: -20px -20px 0 -20px;
  font-weight: 300;
  border-radius: 3px 3px 0 0;
}
#timeline .timeline-item .timeline-content:before {
  content: '';
  position: absolute;
  left: 45%;
  top: 20px;
  width: 0;
  height: 0;
  border-top: 7px solid transparent;
  border-bottom: 7px solid transparent;
  border-left: 7px solid #ee4d4d;
}
#timeline .timeline-item .timeline-content.right {
  float: right;
}
#timeline .timeline-item .timeline-content.right:before {
  content: '';
  right: 45%;
  left: inherit;
  border-left: 0;
  border-right: 7px solid #ee4d4d;
}
</style>
@stop

@section('content')

<div class="container">
  		<h1>PLAN DE TRABAJO</h1>
  <div id="clk"></div>
  <!-- task 1 -->
  <h3> SEGUNDO CONGRESO DE ALIMENTOS Y BEBIDAS</h3>
  		<div id="timeline">
  			<div class="timeline-item">
  				<div class="timeline-icon text-center">
  					<h4>9:00</h4>
  				</div>
  				<div class="timeline-content right">

  					<div class="row">
  						<div class="col-md-12">
  							<h1>TITULO</h1>
  						</div> 
  						<div class="col-md-2 col-sm-3 ">
  							<a class="story-img" href="#"><img src="01.jpg" style="width:50px;height:50px" class="img-circle img-responsive"></a>
  						</div>
  						<div class="col-md-10 col-sm-9">
  							<h3>NOMBRE</h3>
  							<div class="row">
  								<div class="col-xs-6">
  									<h4>CARGO</h4>
  								</div>
  								<div class="col-xs-6"></div>
  							</div>
  						</div>
  					</div>

				</div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon text-center">
					<h4>9:00</h4>
				</div>
				<div class="timeline-content">
					
					<div class="row">
  						<div class="col-md-12">
  							<h1>TITULO</h1>
  						</div> 
  						<div class="col-md-2 col-sm-3 text-center">
  							<a class="story-img" href="#"><img src="01.jpg" style="width:50px;height:50px" class="img-circle img-responsive"></a>
  						</div>
  						<div class="col-md-10 col-sm-9">
  							<h3>NOMBRE</h3>
  							<div class="row">
  								<div class="col-xs-6">
  									<h4>CARGO</h4>
  								</div>
  								<div class="col-xs-6"></div>
  							</div>
  						</div>

  						<div class="col-md-2 col-sm-3 text-center">
  							<a class="story-img" href="#"><img src="01.jpg" style="width:50px;height:50px" class="img-circle img-responsive"></a>
  						</div>
  						<div class="col-md-10 col-sm-9">
  							<h3>NOMBRE</h3>
  							<div class="row">
  								<div class="col-xs-6">
  									<h4>CARGO</h4>
  								</div>
  								<div class="col-xs-6"></div>
  							</div>
  						</div>

  						<div class="col-md-2 col-sm-3 text-center">
  							<a class="story-img" href="#"><img src="01.jpg" style="width:50px;height:50px" class="img-circle img-responsive"></a>
  						</div>
  						<div class="col-md-10 col-sm-9">
  							<h3>NOMBRE</h3>
  							<div class="row">
  								<div class="col-xs-6">
  									<h4>CARGO</h4>
  								</div>
  								<div class="col-xs-6"></div>
  							</div>
  						</div>
  					</div>

				</div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon text-center">
					<h4>9:00</h4>
				</div>
				<div class="timeline-content right">
					<<div class="row">
  						<div class="col-md-12">
  							<h1>TITULO</h1>
  						</div> 
  						<div class="col-md-2 col-sm-3 text-center">
  							<a class="story-img" href="#"><img src="01.jpg" style="width:50px;height:50px" class="img-circle img-responsive"></a>
  						</div>
  						<div class="col-md-10 col-sm-9">
  							<h3>NOMBRE</h3>
  							<div class="row">
  								<div class="col-xs-6">
  									<h4>CARGO</h4>
  								</div>
  								<div class="col-xs-6"></div>
  							</div>
  						</div>
  						<div class="col-md-2 col-sm-3 text-center">
  							<a class="story-img" href="#"><img src="01.jpg" style="width:50px;height:50px" class="img-circle img-responsive"></a>
  						</div>
  						<div class="col-md-10 col-sm-9">
  							<h3>NOMBRE</h3>
  							<div class="row">
  								<div class="col-xs-6">
  									<h4>CARGO</h4>
  								</div>
  								<div class="col-xs-6"></div>
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
setInterval(function(){
  var d=new Date();
  var h=d.getHours();
  var m=d.getMinutes();
  var s=d.getSeconds();
document.getElementById("clk").textContent=[h,m,s].map(function(a){return a<10?'0'+a:a}).join(':');
}, 1000);
</script>
@stop



