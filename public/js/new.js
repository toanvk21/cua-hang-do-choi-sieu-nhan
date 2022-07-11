var app = angular.module('myapp', []);
app.controller('mycontroller', function($scope, $http) {
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/new/"
    }).success(function(response) {
        console.log(response);
        $scope.tintuc = response;
    });
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/tintucs/"
    }).success(function(response) {
        console.log(response);
        $scope.tintuc = response;
    });
});