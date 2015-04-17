<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ng-tutorial-app.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ng-tutorial-controller.js"></script>


<div data-ng-app="app" ng-controller="MainController as main" class="container">

	<h1>{{main.title}}</h1>
	<div class="input-group">
		<span class="input-group-addon">
			<span class="glyphicon glyphicon-search"></span>
		</span>
		<input type="text" class="form-control" ng-model="main.searchInput">
	</div>
	<h3>A list of TV shows</h3>
	<ul class="list-group">
		<li class="list-group-item" ng-repeat="show in main.shows | filter:main.searchInput | orderBy:main.order.key:main.order.reverse">
			<span class="glyphicon glyphicon-star" ng-if="show.favorite == true"></span>{{show.title}} 
			<span class="badge">{{show.year}}</span>
		</li>
	</ul>
	<select class="form-control pull-right" ng-model="main.order" ng-options="order as order.title for order in main.orders"></select>
	<div class="clearfix"></div>
	<h3>Add a new show</h3>
	<form name="main.addForm" class="form" ng-submit="main.addShow()">
		<div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control" ng-model="main.new.title" required />
		</div>
		<div class="form-group">
			<label>Year</label>
			<input type="number" min="1900" max="2030" class="form-control" ng-model="main.new.year" required />
		</div>
		<div class="row">
			<div class="col-xs-6">
				<label>Favorite: <input type="checkbox" ng-model="main.new.favorite"/></label>
			</div>
			<div class="col-xs-6">
				<button class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
			</div>
		</div>
		
	</form>

</div>