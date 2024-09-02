<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StylePresetValue extends Model
{
    use HasFactory, SoftDeletes;

    public function style_preset()
    {
        return $this->belongsTo(StylePreset::class);
    } 

    public function style_item()
    {
        return $this->belongsTo(StyleItem::class);
    } 

    public function style_item_option()
    {
        return $this->belongsTo(StyleItemOption::class);
    } 



}
