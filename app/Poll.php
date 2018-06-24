<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $guarded = []; 

    public function poll_options() 
    {
        return $this->hasMany(PollOption::class, 'code');
    }


}
