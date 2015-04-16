	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ng-showDevices.js"></script>

	<div data-ng-app="deviceList">

            <div ng-controller="FetchController">
                
                <div>{{loading}}</div>
                	
                
                <input type="text" ng-model="coolVar" size="80" />
                
                <div>
                	{{coolVar}}
                </div>
                <select ng-model="method" aria-label="Request method">
                  <option>GET</option>
                  <option>JSONP</option>
                </select>
                <input type="text" ng-model="url" size="80" aria-label="URL" />
                <button id="fetchbtn" ng-click="fetch()">fetch</button><br>
                 <button id="samplejsonpbtn"
                  ng-click="updateModel('JSONP',
                                'http://www.devlocal.netzero.net/start/showAllDevices.do?wls_rsf=1&rtype=jsonp&callback=JSON_CALLBACK')">
                  Sample JSONP
                </button>
              

			<hr />
			
			
	        <ul ng-repeat="devices in data">
              	<li ng-repeat="device in devices"><div ng-repeat="attr in device">{{attr}}</div></li>
              </ul>

<div class="row" ng-repeat="devices in data">
	
	<div class="col-md-offset-2 col-md-8" style="border:1px blue solid;">
		<div class="row">
			<div class="col-md-6 margin-small" ng-repeat="device in devices" style="border:1px red solid;">
				<div class="row">
					<div class="col-xs-4"><img src='/wp-includes/images/NetZero/iphone.png' class='m-top-10'></div>
					<div class="col-xs-8">
						<span class="gray1">Apple</span><br />
						<span class="aqua">{{device.name}}</span>
						<hr />
						<span class="gray1">
							<strong>{{device.name}} Specs:</strong><br />
							One of the most popular versions of the iPhone, the iPhone 4s features a beautiful, 3.5" Retina display, 
							an 8-megapixel iSight camera with 1080p HD video recording, an A5 chip and more.
							<ul>
								<li>Siri - Your own intelligent personal assistant</li>
								<li>1080p HD video stabilized video recording at 30 fps</li>
								<li>8 megapixel camera with LED flash</li>
							</ul>
						</span> 
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 orange">$199.95</div>
					<div class="col-xs-8 height70"><button type="button" class="btn btn-primary">Learn More</button></div>
				</div>
			</div>
			
			<div class="col-md-1"></div>
			
			
	</div>
	</div>

	
</div>


              
              <hr />
              
              
              <pre>http status code: {{status}}</pre>
                <pre>http response data: {{data}}</pre>
              

			<hr />
              
              </div>
             
       
       </div>
       
      </div>