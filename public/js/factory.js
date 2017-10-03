var app = angular.module('myApp', ['ui.bootstrap', 'ngAnimate'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});
app.factory('mainFactory', mainFactory)
.factory('handler', handler)

function mainFactory($http, $q, $log) {
    
    return {
        getData: getData,
    };
    
    function setData() {
        return data;
    }
    
    function http(method, url, headers = null, data = null, ) {
        var defer = $q.defer();
        content = {
            method: method, 
            url: url,
            headers: headers,
            data: data,
            
        };
        $http(content).then(function(response) {
            defer.resolve(response);
        })
        .finally(function() {
            $log.log('Request Complete:', url);
        });
        return defer.promise;
    }
    
    function getData() {
        return http('get', 'get-data');
    }
}

function handler($log) {
    return {
        error: error
    }

    function error() {
        $log.error('Something went wrong.');
    }
}