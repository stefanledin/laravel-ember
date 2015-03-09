<h1>{{ name }}</h1>
<table class="table table-bordered" ng-if="predictions">
	<thead>
		<th>Användare</th>
		<th>Tips</th>
	</thead>
	<tbody>
		<tr ng-repeat="prediction in predictions">
			<td>{{ prediction.user.username }}</td>
			<td>{{ prediction.prediction }}</td>
		</tr>
	</tbody>
</table>
<h3>Tippa</h3>

<?php echo Form::open(['action' => 'GamesController@store']); ?>

<?php echo Form::close(); ?>

<form class="form-inline">
	<div class="form-group">
		<input ng-model="prediction.username" type="text" class="form-control" id="username" name="username" placeholder="Användarnamn">
	</div>
	<div class="form-group">
		<input ng-model="prediction.prediction" type="text" class="form-control" id="prediction" name="prediction" placeholder="Tips">
	</div>
	<button type="submit" ng-click="save(prediction)" class="btn btn-success">Tippa</button>
</form>