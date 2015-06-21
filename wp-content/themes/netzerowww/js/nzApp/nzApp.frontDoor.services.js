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
			if (response.data.cartDetails) {
				console.log('add to cart now');
				$window.location.href = "http://info.int.untd.com:8080/nzblog/netzero-plans?wls-did=" + response.data.cartDetails.offerViews[0].offerId;
			} else {
				console.log('dont add to cart, just view device');
				$window.location.href = "http://info.int.untd.com:8080/nzblog/device-info-page?wls-did=" + response.data.devices.offerId;
			}
			console.log(response.data);
			return response;
		};
	}