<h1>Pågående: {{ games.onGoing }}</h1>
<ul>
	<li ng-repeat="game in games.games">{{ game.name }}</li>
</ul>