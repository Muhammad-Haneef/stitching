<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeGroup extends Model
{
    use HasFactory, SoftDeletes;

    public function attribute_values()
    {
        return $this->hasMany(AttributeValue::class);
    } 



}
