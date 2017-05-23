var mainApp = angular.module("mainApp", ['ngRoute','ngTable']);
 mainApp.config(function($routeProvider) {
    // $routeProvider
    //     .when('/login', {
    //         templateUrl: 'users/login',
    //        // controller: 'StudentController'
    //     })
		// .when('/add-posting', {
		// templateUrl: 'users/submit_add',
		// //controller: 'StudentController'
		// })
		// .when('/registration', {
		// // templateUrl: 'users/registration',
		// controller: 'getInd'
		// })
		// .when('/', {
		// templateUrl: 'users/index',
		// //controller: 'StudentController'
		// })
    // /*     .otherwise({
    //         redirectTo: '/'
    //     }) */;
}
);

mainApp.controller('getInd', function($scope,$http){

    // $scope.item = <?php echo json_encode($iteItems) ?>;

    $scope.getItems = function() {

      $http
      // .get("<?php// echo Router::url(array('controller' => 'ItemItems', 'action' => 'getIndexClass')) ?>" + '/' + 1)
       .get('http://localhost:8081/cake/ite-items/getIndexClass/1')
       .then(function(response) {
     $scope.item2 = response;
     console.log($scope.item2);
 });


    };
  });
