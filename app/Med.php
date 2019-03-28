<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Med extends Model
{
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function doses()
	{
		return $this->hasMany(Dose::class);
	}
}
