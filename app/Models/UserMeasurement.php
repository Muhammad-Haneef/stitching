<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserMeasurement extends Model
{
    use HasFactory, SoftDeletes;


    
    public function location()
    {
        return $this->belongsTo(Location::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    }     
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }  
    
    public function items()
    {
        return $this->hasMany(UserMeasurementItem::class);
    }  
}
