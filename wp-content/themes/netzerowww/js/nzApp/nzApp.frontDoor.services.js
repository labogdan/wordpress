angular.module('frontDoor.services', [])
.factory('fetchData', (function ($http) {
	
	var fetch = function (myUrl, $templateCache) {
		$http({method: 'JSONP', url: myUrl, cache: $templateCache}).
	    success(function(data, status) {
	    	return {status : status, data : data}
	    }).
	    error(function(data, status) {
	    	
//	    	vm.data = data || "Request failed";
//	    	vm.status = status;
	    });
	};
	return fetch;
}()));