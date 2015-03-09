+(function (angular) {
	'use strict';

	var mmtipset = angular.module('multimediatipset', ['ngRoute'])
	
	.controller('GamesController', function ($http) {
		var _this = this;
		$http.get('/games').success(function (data) {
			_this.games = data;
			_this.onGoing = data.length;
		});
	})
	.controller('GameController', function ($http, $routeParams, $scope) {
		$http.get('/games/'+$routeParams.game_id).success(function (data) {
			$scope.name = data[0].name;
			$scope.predictions = data[0].predictions;
		});

		$scope.save = function (prediction) {
			$scope.predictions.push({
				prediction: prediction.prediction,
				user: {
					username: prediction.username
				}
			});
			$http.post('/games', prediction).success(function (data) {
				console.log(data);
			});
			prediction.prediction = '';
			prediction.username = '';
		};

	})

	.config(function ($routeProvider) {
		$routeProvider
			.when('/', {
				controller: 'GamesController',
				controllerAs: 'games',
				templateUrl: '/games.php'
			})
			.when('/games/:game_id', {
				controller: 'GameController',
				controllerAs: 'game',
				templateUrl: '/game.php'
			});
	});
	
})(window.angular);

