app.controller('appCtrl', function(mainFactory, $scope) {
  
    mainFactory.getData()
    .then(function(response) {
        $scope.activeStreams = response.data.activeStreams;
        $scope.players = response.data.players;
        console.log($scope.activeStreams);
    });
  
});
