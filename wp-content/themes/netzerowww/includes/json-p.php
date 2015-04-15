
            <div ng-controller="FetchController">
                
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
                <pre>http status code: {{status}}</pre>
                <pre>http response data: {{data}}</pre>
              
              <ul ng-repeat="devices in data">
              	<li ng-repeat="attributes in devices">{{attributes}}</li>
              </ul>


			<hr />
			
			
	        <ul ng-repeat="devices in data">
              	<li>{{devices['device-id']}} name : {{devices['device-name']}}</li>
              </ul>

              
              </div>
             
       <!-- content end -->
       </div>