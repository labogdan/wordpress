
angular.module('nzVoice')
	.config(['$routeProvider', function ($routeProvider) {
	$routeProvider.
		when('page', {
			redirectTo: '/devices'
		}).
		otherwise({
			redirectTo : '/phones'
		});
}]);




angular.module('nzVoice')
	.constant('dataUrl', {
		host : 'http://www.devlocal.netzero.net/start/',
		params : 'rtype=jsonp&callback=JSON_CALLBACK'
	})
    .controller('ShowAllDevices', ShowAllDevices)
	.controller('ShowFDPlans', ShowFDPlans);
	
ShowAllDevices.$inject = ['$scope', '$http', '$templateCache', 'fetchData', 'dataUrl', 'processResponse'];

function ShowAllDevices ($scope, $http, $templateCache, fetchData, dataUrl, processResponse) {
    	
	var vm = this;
	
    vm.geturl = dataUrl.host + 'showPocDevices.do?wls_rsf=1&wls_poc=hs&wls_pid=2&' + dataUrl.params;
    vm.addurl = "http://www.familyhomesteading.com/api/get-phones.php?action=select_device_ok&callback=JSON_CALLBACK";
    vm.sendurl = dataUrl.host + 'showDevice.do?' + dataUrl.params;
    vm.loading = true;
        
    fetchData.fetch(vm.geturl).then(function(response) {
    	vm.data = response.data;
    	vm.loading = false;
    	console.log(vm.data)
    });
    
    vm.quantity = 1;
    vm.price = 24.99;
    vm.deviceName = 'Apple iPhone';
    vm.planName = 'Plus plan';
    
    $scope.addToCart = function(deviceId) {
    	console.log('adding: ' + deviceId);
    	fetchData.fetch(vm.addurl).then(function(response) {
    		processResponse.process(response);
    	});
    };
    
    $scope.learnMore = function(deviceId) {
    	console.log('routing to deviceView: ' + deviceId);
    	fetchData.fetch(vm.sendurl + '&wls_did=' +deviceId).then(function(response) {
    		processResponse.process(response);
    	});
    };
};

ShowFDPlans.$inject = ['$scope', '$http', '$templateCache', 'fetchData', 'dataUrl'];

function ShowFDPlans ($scope, $http, $templateCache, fetchData, dataUrl) {
	
	var vm = this;
	
	vm.geturl = dataUrl.host + 'showPlans.do?wls_did=nz-wls-hs-sp-device-01&' + dataUrl.params;
	vm.addurl = dataUrl.host + 'selectPlan.do?wls_poc=hs&wls_pid=2&wls_rsf=1' + dataUrl.params;
	vm.loading = true;
	
	fetchData.fetch(vm.geturl).then(function(response) {
    	vm.data = response.data;
    	vm.loading = false;
    	console.log(vm.data)
    });
	
	$scope.addToCart = function(offerId) {
		console.log('adding: ' + offerId);
		processResponse.process(response);
	}
	
};