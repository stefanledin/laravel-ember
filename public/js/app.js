;(function (w, d, $, undefined) {
	
	'use strict';
	
	window.App = Ember.Application.create();

	/**
	 * Routes
	 */
	App.Router.map(function () {
		this.resource('games', function () {
			this.route('single', {path: '/:game_id'});
		});
	});
	App.GamesRoute = Ember.Route.extend({
		model: function (params) {
			return Ember.$.getJSON('/games');
		}
	});

})(window, document, jQuery);