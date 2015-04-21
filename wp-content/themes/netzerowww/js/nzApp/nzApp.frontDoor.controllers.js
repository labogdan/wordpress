
angular.module('frontDoor.controllers', ['frontDoor.services'])
    .controller('showAllDevices', ['$scope', '$http', '$templateCache', //'fetchData',
       function($scope, $http, $templateCache) {
    	
    		var vm = this;
    		
            vm.method = 'JSONP';
            vm.url = 'http://www.devlocal.netzero.net/start/showPocDevices.do?wls_rsf=1&wls_poc=hs&wls_pid=2&rtype=jsonp&callback=JSON_CALLBACK';
            
            vm.loading = true;
            
/*            fetchData.fetch(vm.url, $templateCache).then(function(res) {
            	
            });
*/            
            vm.quantity = 1;
            vm.price = 24.99;
            vm.deviceName = 'Apple iPhone';
            vm.planName = 'Plus plan';
            
            
            vm.fetch = function() {
            	vm.code = null;
            	vm.response = null;
     
                $http({method: vm.method, url: vm.url, cache: $templateCache}).
                    success(function(data, status) {
                    	vm.status = status;
                    	vm.data = data;
                        vm.loading = false;
                    }).
                    error(function(data, status) {
                    	vm.data = data || "Request failed";
                    	vm.status = status;
                    });
                };
                vm.fetch();
                vm.updateModel = function(method, url) {
                	vm.method = method;
                	vm.url = url;
    };
    }])
	.controller('showSmallCart', ['$scope', '$http', '$templateCache'],
			function ($scope, $http, $templateCache) {
		
			var vm = this;
			
			
		
	});
   
