<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'name',
        'date_to_be_held',
        'party',
        'travel',
        'learn',
        'description'
    ];
}
