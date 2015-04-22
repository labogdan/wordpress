
angular.module('nzVoice')
    .controller('ShowAllDevices', ShowAllDevices);

ShowAllDevices.$inject = ['$scope', '$http', '$templateCache', 'fetchdata'];

function ShowAllDevices ($scope, $http, $templateCache, fetchdata) {
    	
	var vm = this;
	
    vm.method = 'JSONP';
    vm.url = 'http://www.qa5.netzero.net/start/showPocDevices.do?wls_rsf=1&wls_poc=hs&wls_pid=2&rtype=jsonp&callback=JSON_CALLBACK';
    
    vm.loading = true;
    
//    console.log(fetchdata.fetch(vm.url));
    
    fetchdata.fetch(vm.url).then(function(response) {
    	vm.data = response.data;
    });
    
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
    //vm.fetch();
};
