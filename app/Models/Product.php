<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    } 

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    } 

    public function category()
    {
        return $this->belongsTo(Category::class);
    } 


}
