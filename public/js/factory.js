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
        return http('get', 'get-data')
        .then(function(response) {           
           getActiveStreams(response.data.key, response.data.players);
           return response;
        });
    }
    
    function getActiveStreams(key, players) {
        // foreach function 
        // var players = foreach loop to concat &user_login=
        
        // var list = "?";
        var list = '?';
        for (var i = 0; i < players.length; i++) {
            list = list + '&user_login=' + players[i].stream_username;
            // TODO cycle and send the request every 100 iterations.
            // This logic should be a promise because this call can have the potential to clal multiple times
        }
        console.log(list);
       
        
        
        // headers = {
        //     "Client-ID":key
        // };
        
        // return http('get', 'https://api.twitch.tv/helix/streams?' + players, headers);
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