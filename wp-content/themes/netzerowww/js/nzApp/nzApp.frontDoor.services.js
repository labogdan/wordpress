angular.module('nzVoice')
	.factory('fetchData', fetchData)
	.factory('processResponse', processResponse);

	fetchData.$inject = ['$http'];

	function fetchData($http) {
		
		var oPublic = {
				fetch : fetch
		};
		return oPublic;
		
		function fetch (myUrl) {
			console.log('posting to ' + myUrl);
			return $http({method: 'JSONP', url: myUrl})
		};
	};
	
	processResponse.$inject = ['$window'];
	
	function processResponse($window) {
		
		var oPublic = {
				process : process
		}
		return oPublic;
		
		function process(response) {
			console.log('response received: ' + response.data.devices.class);
			
			if (response.data.devices.class.indexOf('DeviceDetailView') != -1) {
				$window.location.href = "http://info.int.untd.com:8080/nzblog/device-info-page?wls-did=" + response.data.devices.offerId; //TODO: link up to relative url
			} else if (response.data.devices.class.indexOf('addDevice') != -1) {
				$window.location.href = "http://info.int.untd.com:8080/nzblog/netzero-plans?wls-did=" + response.data.devices.offerId; //TODO: link up to relative url
			}
			return response;
		};
	}