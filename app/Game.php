<?php namespace multimediatipset;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {

	protected $fillable = ['name', 'type', 'status', 'price'];

	public function predictions()
	{
		return $this->hasMany('multimediatipset\Prediction');
	}

}
