app.controller('appCtrl', function(mainFactory, $scope) {
  
    mainFactory.getData()
    .then(function(response) {
        $scope.players = response.data;
        console.log($scope.players);
    });
  
});
