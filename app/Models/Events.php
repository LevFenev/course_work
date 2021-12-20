<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    public function comments(){
        return $this->hasMany(EventsComments::class, 'events_id');
    }
}
