<!doctype html>
<html lang="en-us">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
        <script defer src="/js/brands.min.js"></script>
        <script defer src="/js/regular.min.js"></script>
        <script defer src="/js/fontawesome.min.js"></script>
        <title>Lol Pros Online</title>
    </head>
    <body ng-app="myApp" ng-controller="appCtrl">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid pro-navbar">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">PROPLAYERS.ONLINE</a>
                </div>
                <div class="row">
                    <div class="search-container col-md-3 center-block">
                        <input type="text" placeholder="Search by name, team, or region..." class="search-box" ng-model="query">
                    </div>
                </div>
                <!-- <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav teko">
                        <li class="nav-link"><a href="#!/about">F.A.Q.</a></li>
                        <li><a href="/submit">Submit A Player</a></li>
                    </ul>
                </div> -->
            </div>
        </nav>

        <div>
            <section class="sidenav">
                <p>
                    This is a sidebar!
                </p>
            </section>
            <section class="main-content" ng-view>

            </section>
        </div>

        <footer>
            <!-- footer -->
        </footer>
        <script src="/js/underscore-min.1.8.3.js"></script>
        <script src="/js/angular.min.js"></script>
        <script src="/js/angular-route.min.js"></script>
        <script src="/js/angular-animate.min.js"></script>
        <script src="/js/angular-touch.min.js"></script>
        <script src="/js/ui-bootstrap-tpls-2.5.0.min.js"></script>
        <script src="/js/factory.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
