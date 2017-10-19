app.controller('appCtrl', function(mainFactory, $scope) {
	$scope.activeCount = 0;
    
    $scope.search = function(streamer) {
        if (
            !$scope.query || 
            (streamer.first_name.toLowerCase().indexOf($scope.query) != -1) || 
            (streamer.last_name.toLowerCase().indexOf($scope.query.toLowerCase()) != -1) || 
            (streamer.handle.toLowerCase().indexOf($scope.query.toLowerCase()) != -1) || 
            (streamer.position.name.toLowerCase().indexOf($scope.query.toLowerCase()) != -1) || 
            (streamer.last_name.toLowerCase().indexOf($scope.query.toLowerCase()) != -1) || 
            (streamer.team.name.toLowerCase().indexOf($scope.query.toLowerCase()) != -1) || 
            (streamer.team.acronym.toLowerCase().indexOf($scope.query.toLowerCase()) != -1) || 
            (streamer.team.region_id.name.toLowerCase().indexOf($scope.query.toLowerCase()) != -1) || 
            (streamer.team.region_id.acronym.toLowerCase().indexOf($scope.query.toLowerCase()) != -1) || 
            (streamer.team.region_id.region.toLowerCase().indexOf($scope.query.toLowerCase()) != -1)
            ){
            return true;
        }
        return false;
    };
	
    mainFactory.getData()
    .then(function(response) {
    	console.log(response);
        $scope.players = response.data.players;
        $scope.positions = response.data.positions;
        $scope.regions = response.data.regions;
        $scope.statuses = response.data.statuses;
        $scope.teams = response.data.teams;
        
        $scope.activeStreamers = _.filter($scope.players, function(player) {
        	return player.online == true;
        });
        
        $scope.filter = {
			team: "",
			position: "",
			region: "",
			status: "1"
		};
    });
  
});
