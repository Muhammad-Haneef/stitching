<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserMeasurementItem extends Model
{
    use HasFactory, SoftDeletes;

    
    public function user_management()
    {
        return $this->belongsTo(UserMeasurement::class);
    }  


}
