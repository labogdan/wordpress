angular.module('nzVoice')
	.factory('fetchdata', fetchdata);

	fetchdata.$inject = ['$http'];

	function fetchdata($http) {
		
		var oPublic = {
				fetch : fetch
		};
		return oPublic;
		
		function fetch (myUrl) {
			console.log('posting to ' + myUrl);
			return $http({method: 'JSONP', url: myUrl})
/*		    success(function(data, status) {
		    	console.log(data+ '  returning data...');
		    	return data;
		    }).
		    error(function(data, status) {
		    	return status;
		    });*/
		};
}