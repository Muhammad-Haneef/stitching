<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerImage extends Model
{
    use HasFactory, SoftDeletes;


    public function banner()
    {
        return $this->belongsTo(Banner::class);
    } 

}
