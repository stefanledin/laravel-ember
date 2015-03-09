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
	<body ng-app="multimediatipset">

		<div class="container-fluid">
		
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="/">Multimediatipset.com</a>
					</div>
				</div>
			</nav>

			<div class="row">
				<div class="col-xs-12" ng-view>
					
				</div>
			</div>
				
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/angular.min.js"></script>
		<script src="js/angular-route.min.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>