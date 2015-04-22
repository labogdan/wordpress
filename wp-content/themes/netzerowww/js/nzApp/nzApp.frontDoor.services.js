angular.module('nzVoice')
	.factory('FetchData', FetchData);

	function FetchData($http) {
		
		var oPublic = {
				fetch : fetch
		};
		return oPublic;
		
		function fetch (myUrl, $templateCache) {
			$http({method: 'JSONP', url: myUrl, cache: $templateCache}).
		    success(function(data, status) {
		    	return {status : status, data : data}
		    }).
		    error(function(data, status) {
		    });
		};
}