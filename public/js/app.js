+(function (angular) {
	'use strict';

	var mmtipset = angular.module('multimediatipset', ['ngRoute'])
	
	.controller('GamesController', function ($scope, $http, $routeParams) {
		var _this = this;
		console.log($routeParams);
		$http.get('/games').success(function (data) {
			_this.games = data;
			_this.onGoing = data.length;
		});
	})
	.controller('GameController', function ($scope, $routeParams) {
		console.log($routeParams);
	})

	.config(function ($routeProvider) {
		$routeProvider
			.when('/', {
				controller: 'GamesController'
			})
			.when('/games/:game_id', {
				controller: 'GameController'
			});
	});
	
})(window.angular);

