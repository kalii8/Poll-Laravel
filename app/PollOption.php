<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Poll;

class PollOption extends Model

{
    protected $guarded = [];

    public function poll() 
    {
    return $this->belongsTo(Poll::class, 'code');
    }
}
