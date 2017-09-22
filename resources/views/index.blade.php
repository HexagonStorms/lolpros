<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:700i" rel="stylesheet">
        <title>Lol Pros Online</title>
    </head>
    <body ng-app="myApp" ng-controller="appCtrl" class="container">
        <nav class="navbar">
            <span>LoL Pros Online</span>
            <!-- Large "nav" -->
        </nav>
        <section>
            <!-- Filter Div -->
        </section>
        <section class="player-section">
            <div class="row">
                <div ng-repeat="player in players" class="player-box text-center col-md-3">
                    <h2 class="player-name">[[player.handle]]</h2>
                    <div class="player-info text-left">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="info-title">NAME</h4>
                                <h5 class="info-content">[[player.first_name]] [[player.last_name]]</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="info-title">POSITION</h4>
                                <h5 class="info-content">Mid</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="info-title">LEAGUE</h4>
                                <h5 class="info-content">LCK</h5>
                            </div>
                        </div>
                    </div>
                    <img class="player-img" src="https://lolstatic-a.akamaihd.net/esports-assets/production/player/faker-euaqlz0c.png" />
                    <img class="team-logo" src="https://files.stage.gg/teamlogos/ALL/500px/lck-sktelecom-t1-500.png" />
                    <div class="online-light" tooltip-placement="top" uib-tooltip="Online now!">
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
