<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Multimediatipset</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/app.css" rel="stylesheet">
	</head>
	<body>

		<div class="container-fluid">
		
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="/">Multimediatipset.com</a>
					</div>
				</div>
			</nav>

			<div class="row">
				<div class="col-xs-12">
				</div>
			</div>

			<script type="text/x-handlebars" id="index">
				<h1>multimediatipset.com</h1>
			</script>

			<script type="text/x-handlebars" id="games">
				<h2>Pågående tippningar</h2>
				<ul>
				{{#each game in this}}
					<li>{{#link-to 'games.single' game}} {{ game.name }} {{/link-to}}</li>
				{{/each}}
				</ul>
			</script>

			<script type="text/x-handlebars" id="games/single">
				<h2>Tips: {{ name }}</h2>
			</script>
			
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/ember-1.10.0.debug.js"></script>
		<script src="js/ember-template-compiler-1.10.0.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>