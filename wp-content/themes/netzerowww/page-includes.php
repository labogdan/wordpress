<style>
	#row4 div[class^="col-"] {
		min-height : 40px;
		background : #cecece;
		border : 1px solid red;
	}
	
	.col-centered{
		float: none;
		margin: 0 auto;
	}
	
	div[id^="row"] h1 {
		color : white;
		font-size : 4rem;
		text-transform : uppercase;
		margin-top : 100px;
	}
	
	div[id^="row"] h2 {
		color : white;
		font-size : 1.5rem;
		font-weight: normal;
	}
	
	.nz-logo {
		background : url('/wp-includes/images/NetZero/Header_logo.png');
		width : 125px;
		height : 50px;
	}
	
	#row1 {
		background : url('/wp-includes/images/NetZero/iStock_000047153614Large.jpg');
		height : 1012px;
		background-size : cover;
	}
	
	#row1 h1 {
		font-size : 8rem;
		text-transform : uppercase;
		color : #41424a;
	}

	#row1 h2 {
		font-size : 3.4rem;
		color : #41424a;
		font-weight: normal;
	}
	
	.margin-large {
		margin-top : 250px;
	}
	
	.margin-small {
		margin-top : 50px;
	}
	
	@media screen and (max-width: 767px) {
		#row1 {
			background : url('/wp-includes/images/NetZero/iStock_000047153614Large.jpg');
			height : 300px;
			background-size : 150%;
			background-position : 30% 0;
		}
		#row1 h1 {
			font-size : 3rem;
		}
		#row1 .margin-large {
			margin-top : 100px;
		}
		#row1 .margin-small {
			margin-top : 50px;
		}
		#row1 h2 {
			font-size : 1.5rem;
			color : #41424a;
			font-weight: normal;
		}
	}

	#row2 {
		background : #222226;
		height : 76px;
	}
	
	@media screen and (max-width: 767px) {
		#row2 {
			height : 200px;
		}
	}
	.navbar-default {
		background : none;
	}
	.navbar-default .navbar-nav > li > a{
		color : #5adbc8;
	}
	.navbar-default .navbar-nav > li > a:link{
		color : #5adbc8;
	}
	.navbar-default .navbar-nav > li > a:hover{
		color : #acacac;
		background : #cecece;
	}
	
	.navbar {
		border : none;
	}
	
	.navbar-default .navbar-nav > li > a.large-white {
		font-size : 2rem;
		color : #ffffff;
		background : #5adbc8;
	}
	.navbar-default .navbar-nav > li > a.large-white:link {
		font-size : 2rem;
		color : #ffffff;
	}
	.navbar-default .navbar-nav > li > a.large-white:hover {
		font-size : 2rem;
		color : #ffffff;
	}

	#row3 {
		background : #222226;
		height : 352px;
	}
	
	#row4 {
		background : white;
		height : 400px;
	}
	
	.arrow-down {
		background : #222226;
		width : 50px;
		height : 50px;
		-ms-transform: rotate(45deg);
 		-webkit-transform: rotate(45deg);
		transform: rotate(45deg);
		margin-top : -25px;
	}

</style>


<div id="row1" class="row">
	<div class="nz-logo col-md-2 col-md-offset-2">
	</div>
	<div class="margin-large col-md-6 col-md-offset-3 text-center">
		<h1>wireless done your way</h1>
	</div>
	<div class="margin-small col-md-6 col-md-offset-3 text-center">
		<h2>Finally, a smart wireless service to match your smartphone.</h2>
	</div>
</div>

<div id="row2" class="row">
	<nav class="navbar navbar-default">
	  <div class="container">
	  	<div class="collapse navbar-collapse">
	  		<ul class="nav navbar-nav">
	  			<li><a href="#"><strong>PHONES</strong></a></li>
	  			<li><a href="#"><strong>PLANS</strong></a></li>
	  			<li><a href="#"><strong>COVERAGE</strong></a></li>
	  			<li><a href="#">ACCOUNT</a></li>
	  			<li><a href="#">SUPPORT</a></li>
	  			<li><a href="#">1-800-netzero</a></li>
	  			<li><a href="#" class="large-white"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
	  		</ul>
	  	</div>
	  </div>
	</nav>
</div>

<div id="row3" class="row">
	<div class="col-md-6 col-md-offset-3 text-center">
		<h1>the right phone for you</h1>
		<h2>Simple or smart, we've got a phone to fit your needs on a budget.</h2>
	</div>
</div>

<div id="row4" class="row">
	<div class="arrow-down col-md-1 col-centered"></div>
	
	<div class="col-md-4 col-md-offset-2 margin-small">
		<div class="row">
			<div class="col-xs-4"><img src='/wp-includes/images/NetZero/iphone.png'></div>
			<div class="col-xs-8"></div>
		</div>
		<div class="row">
			<div class="col-xs-4">$199.95</div>
			<div class="col-xs-8"><button type="button" class="btn btn-default">Learn More</button></div>
		</div>
	</div>
	
</div>
