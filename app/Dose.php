<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dose extends Model

{
	protected $fillable = ['quantity', 'unit', 'time'];


	public function med()
	{
		return $this->hasOne(Med::class);
	}
}


