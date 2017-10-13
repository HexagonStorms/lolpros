<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
        <title>Lol Pros Online</title>
    </head>
    <body ng-app="myApp" ng-controller="appCtrl">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">PROPLAYERS.ONLINE</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/about">About</a></li>
                        <li><a href="/submit">Submit A Player</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Filter Section -->
        <section class="filter-section">
            <div class="row text-center">
                <h2>[[activeStreams.length]] Pro League of Legends Players Currently Streaming</h2>
            </div>
            <div class="row text-center">
                <div class="search-container col-md-5 center-block">
                    <input type="text" placeholder="Search by name, team, or region..." class="search-box">
                </div>
            </div>
            <div class="row text-center select-container">
                <div class="col-md-3 filter-select-container">
                    <select class="filter-select">
                        <option value="0">Online Only</option>
                        <option value="1">Offline Only</option>
                        <option value="2">All</option>
                    </select>
                </div>
                <div class="col-md-3 filter-select-container">
                    <select class="filter-select">
                        <option value="0">-- Select Region --</option>
                    </select>
                </div>
                <div class="col-md-3 filter-select-container">
                    <select class="filter-select">
                        <option value="0">-- Select Team --</option>
                    </select>
                </div>
                <div class="col-md-3 filter-select-container">
                    <select class="filter-select">
                        <option value="0">-- Select Position --</option>
                    </select>
                </div>
            </div>
        </section>
        
        <section class="player-section container">
            <div class="row">
                <div ng-repeat="streamer in activeStreams" class="player-box text-center col-md-3">
                    <h2 class="player-name">[[streamer.handle]]</h2>
                    <div class="player-info text-left">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="info-title">NAME</h4>
                                <h5 class="info-content">[[streamer.first_name]] [[streamer.last_name]]</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="info-title">POSITION</h4>
                                <h5 class="info-content">[[streamer.position.name]]</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="info-title">LEAGUE</h4>
                                <h5 class="info-content">[[streamer.team.region_id.acronym]]</h5>
                            </div>
                        </div>
                    </div>
                    <div class="player-img-container">
                        <img class="player-img" ng-src="[[streamer.image]]" />
                    </div>
                    <img class="team-logo" ng-src="[[streamer.team.logo]]" />
                    <div class="online-light" tooltip-placement="left" uib-tooltip="Online now!">
                        <div class="dot"></div>
                        <div class="pulse"></div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <!-- footer -->
        </footer>
        <script src="/js/angular.min.js"></script>
        <script src="/js/angular-animate.min.js"></script>
        <script src="/js/angular-touch.min.js"></script>
        <script src="/js/ui-bootstrap-tpls-2.5.0.min.js"></script>
        <script src="/js/factory.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
