<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserWishlist extends Model
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
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    } 
}
