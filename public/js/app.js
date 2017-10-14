app.controller('appCtrl', function(mainFactory, $scope) {
    mainFactory.getData()
    .then(function(response) {
    	console.log(response);
        $scope.activeStreams = response.data.activeStreams;
        $scope.players = response.data.players;
        $scope.positions = response.data.positions;
        $scope.regions = response.data.regions;
        $scope.teams = response.data.teams;
        
        $scope.filter = {
			team: 0,
			position: 0,
			region: 0,
			status: 1
		};
    });
  
});
