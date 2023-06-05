<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    protected $table = 'trips';
    protected $fillable = ['bus_id', 'route_id', 'trip_date', 'trip_time'];

    public function bus()
    {
        return $this->belongsTo(Buses::class, 'bus_id');
    }

    public function route()
    {
        return $this->belongsTo(Routes::class, 'route_id');
    }
}
