app.controller('appCtrl', function(mainFactory) {
  var vm = this;
  vm.data = mainFactory.setData();
  
  mainFactory.getData();
  
});
