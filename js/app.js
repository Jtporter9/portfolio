angular.module('app', ['ui.router'])

.config(function ($stateProvider, $urlRouterProvider, $httpProvider) {

		$urlRouterProvider.otherwise('/');

		$stateProvider
			.state('/', {
				url: '/',
				templateUrl: 'js/home/home.html',
				controller: 'homeCtrl'
			})

	});