var app = angular.module('myApp', ['ui.bootstrap', 'ngAnimate']);
app.factory('mainFactory', mainFactory)
.factory('handler', handler)

function mainFactory($http, $q, $log) {
    var data = {
        teams: [],
    };
    
    return {
        setData: setData,
        getData: getData,
    };
    
    function setData() {
        return data;
    }
    
    function http(method, url, data = null) {
        var defer = $q.defer();
        content = {
            method: method, 
            url: url, 
            data: data
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
        return http('get', 'get-data')
        .then(function(response) {
            console.log(response);
        }); 
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