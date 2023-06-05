<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    protected $table = 'buses';
    protected $fillable = ['bus_number','bus_capacity','company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
