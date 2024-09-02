<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserTemp extends Model
{
    use HasFactory, SoftDeletes;


    public function location()
    {
        return $this->belongsTo(Location::class);
    } 

    public function source()
    {
        return $this->belongsTo(Source::class);
    } 

}
