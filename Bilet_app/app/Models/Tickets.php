<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $fillable = ['user_id', 'trips_id', 'ticket_price'];

    public function trip()
    {
        return $this->belongsTo(Trips::class, 'trips_id');
    }
}
