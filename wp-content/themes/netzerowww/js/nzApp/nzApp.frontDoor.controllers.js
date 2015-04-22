
angular.module('nzVoice')
	.constant('dataUrl', {
		host : 'http://www.qa5.netzero.net/start/',
		params : '&rtype=jsonp&callback=JSON_CALLBACK'
	})
    .controller('ShowAllDevices', ShowAllDevices)
	.controller('ShowFDPlans', ShowFDPlans);
	
ShowAllDevices.$inject = ['$scope', '$http', '$templateCache', 'fetchdata', 'dataUrl'];

function ShowAllDevices ($scope, $http, $templateCache, fetchdata, dataUrl) {
    	
	var vm = this;
	
    vm.url = dataUrl.host + 'showPocDevices.do?wls_rsf=1&wls_poc=hs&wls_pid=2' + dataUrl.params;
    vm.loading = true;
        
    fetchdata.fetch(vm.url).then(function(response) {
    	vm.data = response.data;
    	vm.loading = false;
    	console.log(vm.data)
    });
    
    vm.quantity = 1;
    vm.price = 24.99;
    vm.deviceName = 'Apple iPhone';
    vm.planName = 'Plus plan';
        
};

ShowFDPlans.$inject = ['$scope', '$http', '$templateCache', 'fetchdata', 'dataUrl'];

function ShowFDPlans ($scope, $http, $templateCache, fetchdata, dataUrl) {
	
	var vm = this;
	
	vm.url = dataUrl.host + 'showPlans.do?wls_did=nz-wls-hs-sp-device-01' + dataUrl.params;
	vm.loading = true;
	
	fetchdata.fetch(vm.url).then(function(response) {
    	vm.data = response.data;
    	vm.loading = false;
    	console.log(vm.data)
    });
};