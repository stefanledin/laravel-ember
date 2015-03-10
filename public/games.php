<h1>Pågående: {{ games.onGoing }}</h1>
<ul>
	<li ng-repeat="game in games.games">
		<a href="#/games/{{ game.id }}">{{ game.name }}</a>
	</li>
</ul>