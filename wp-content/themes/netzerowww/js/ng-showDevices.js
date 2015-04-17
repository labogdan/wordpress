'use strict';

angular.module('deviceList', [
    'deviceList.controllers',
    'deviceList.filters'
]);

angular.module('deviceList.controllers', [])
    .controller('FetchController', ['$scope', '$http', '$templateCache',
       function($scope, $http, $templateCache) {
            $scope.method = 'JSONP';
            //$scope.url = 'http://www.survivalhomesteading.com/api/get-phones.php?action=get_device_list_short_info&callback=JSON_CALLBACK';
            $scope.url = 'http://www.devlocal.netzero.net/start/showAllDevices.do?wls_rsf=1&wls_poc=hs&wls_pid=2&rtype=jsonp&callback=JSON_CALLBACK';
            
            $scope.loading = true;
            
            $scope.fetch = function() {
                $scope.code = null;
                $scope.response = null;
     
                $http({method: $scope.method, url: $scope.url, cache: $templateCache}).
                    success(function(data, status) {
                        $scope.status = status;
                        $scope.data = data;
                        $scope.loading = false;
                    }).
                    error(function(data, status) {
                        $scope.data = data || "Request failed";
                        $scope.status = status;
                    });
                };
     $scope.fetch();
            $scope.updateModel = function(method, url) {
                $scope.method = method;
                $scope.url = url;
    };
}]);
   
angular.module('deviceList.filters', [])
    .filter('to_trusted', ['$sce', function ($sce){
        return function (text) {
            return $sce.trustAsHtml(text);
    };
}]);
