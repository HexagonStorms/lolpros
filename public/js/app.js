app.controller('appCtrl', function(mainFactory, $scope) {
	$scope.activeCount = 0;
	
    mainFactory.getData()
    .then(function(response) {
    	console.log(response);
        $scope.players = response.data.players;
        $scope.positions = response.data.positions;
        $scope.regions = response.data.regions;
        $scope.teams = response.data.teams;
        
        $scope.activeStreamers = _.filter($scope.players, function(player) {
        	return player.online == true;
        });
        
        $scope.filter = {
			team: "0",
			position: "0",
			region: "0",
			status: "1"
		};
    });
  
});
