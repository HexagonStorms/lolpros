var app = angular.module('myApp', ['ui.bootstrap', 'ngAnimate']);
app.controller('appCtrl', [ function() {
  var vm = this;
  console.log('the controller has loaded!');
}]);
