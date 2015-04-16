<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ng-showDevices.js"></script>

<style>
	
	.deviceName {
		font-weight : bold;
		font-size : 1.5rem;
		text-transform: uppercase;
		margin-top : 20px;
	}
	
	.deviceText {
		font-size : 1.2rem;
		margin-top : 10px;
	}
	
	.specialPrice {
		color : #ff8f12;
		font-size : 2.2rem;
	}
	
	.originalPrice {
	}
	
	.devicePrice {
		margin-top : 30px;
	}
	
	.buttonWrapper {
		margin-top : 20px;
	}

	.fleft {
		float : left;
	}
	
	.btn-primary {
		background : #c14d00;
		text-transform: uppercase;
		border : 2px #d47134 solid;
	}
	
</style>

<div data-ng-app="deviceList">

	<div ng-controller="FetchController">
                
		<div>{{loading == false? 'all data loaded!':'loading...'}}</div>
                	
		<div class="row" ng-repeat="devices in data" ng-show="$index === 0">
			
			<div class="col-md-offset-2 col-md-9" style="border:1px blue solid;">
				<div class="row">
					<div class="col-md-5 margin-small" ng-repeat-start="device in devices | orderBy: 'displayOrder'" style="border:1px red solid; margin-bottom: 70px;">
						<div class="row">
							<div class="col-xs-4"><img src='/wp-includes/images/NetZero/iphone.png' class='m-top-10'></div>
							<div class="col-xs-8">
								<div class="deviceName" ng-bind-html="device.shortName | to_trusted"></div>
								
								<div class="deviceText">
									This fun, affordable smartphone packed with great features.
								</div>
								
								<div class="devicePrice">
									<div class="fleft specialPrice">{{device.specialPrice == 0.0?'FREE':'$' + device.specialPrice}}</div>
									<div class="fleft originalPrice">${{device.price}}</div>
								</div>
								<br clear="all"/>
								<div class="buttonWrapper">
									<button type="button" class="btn btn-primary">add to cart</button>
									Learn More >
								</div>
								 
							</div>
						</div>
					</div>
					<div ng-if="$index %2 != 0" class="clearfix"></div>
					<div ng-repeat-end ng-if="$index %2 === 0" class="col-md-1"></div>
				</div>
			</div>
			
		</div>
              
        <hr />
              
              
              <pre>http status code: {{status}}</pre>
                <pre>http response data: {{data}}</pre>
              

		<hr />
			
			
			 <ol ng-repeat="devices in data">
              	<li ng-repeat="device in devices">
              		<ul>
              			<div ng-repeat="attr in device">{{attr}}</div>
              		</ul>
              	</li>
              </ol>
              
	</div> <!-- /controller -->
             
       
</div> <!-- /app -->
