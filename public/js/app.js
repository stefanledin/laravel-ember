;(function (w, d, $, undefined) {
	
	'use strict';
	
	window.App = Ember.Application.create();

	/**
	 * Routes
	 */
	App.Router.map(function () {
		this.resource('games');
		this.resource('game', {path: '/games/:game_id'});
	});
	App.GamesRoute = Ember.Route.extend({
		model: function () {
			return Ember.$.getJSON('/games');
		}
	});
	App.GameRoute = Ember.Route.extend({
		model: function (params) {
			var data = Ember.$.getJSON('/games/1');
			console.log(data);
			return data;
		}
	})

})(window, document, jQuery);