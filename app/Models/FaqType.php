<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqType extends Model
{
    use HasFactory, SoftDeletes;

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    } 

}
