<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    protected $table = 'trips';
    protected $fillable = ['bus_id','route_id','trip_date','trip_time'];
}
