<?php namespace multimediatipset;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model {

	protected $fillable = ['prediction'];

	public function games()
	{
		return $this->belongsTo('multimediatipset\Game');
	}

	public function user()
	{
		return $this->belongsTo('multimediatipset\User');
	}

}
