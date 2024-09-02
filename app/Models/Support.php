<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Support extends Model
{
    use HasFactory, SoftDeletes;

    public function location()
    {
        return $this->belongsTo(Location::class);
    } 

    public function support_type()
    {
        return $this->belongsTo(SupportType::class);
    } 

    public function order()
    {
        return $this->belongsTo(Order::class);
    } 



}
