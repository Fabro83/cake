/**
 * Created by Black on 17/7/2017.
 */
var itemApp = angular.module("itemApp", ['ngRoute','smart-table']);

itemApp.controller('getItems', function($scope,$http) {

    $scope.getItems = function () {
        $http({
            method: 'get',
            url: "<?php echo Router::url(array('controller' => 'IteItems', 'action' => 'getItems')) ?>"
        }).
        then(function (response) {
            $scope.item = response.data;
        }, function (err) {//console.log(err);// log error
        });
    };
}