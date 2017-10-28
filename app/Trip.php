<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'Trips';

    protected $fillable = ['name', 'phone', 'dateFrom', 'dateTo', 'origin', 'destination', 'numPeople'];
}
