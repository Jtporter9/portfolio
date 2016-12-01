angular.module('app')
.controller('homeCtrl', ['$location', '$anchorScroll',
 function($scope, $location, $anchorScroll){
    $scope.test = "TESTING!!!";

$scope.JumpToTop = function () {
    console.log("jump to top");
    $location.hash('menu');
    $anchorScroll();
}

$scope.JumpToSkills = function () {
    $location.hash('slide1');
    $anchorScroll();
}

$scope.JumpToBio = function () {
    $location.hash('slide2');
    $anchorScroll();
}

$scope.JumpToContact = function () {
    $location.hash('slide3');
    $anchorScroll();
}

}]);