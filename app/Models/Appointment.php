<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    public function location()
    {
        return $this->belongsTo(Location::class);
    } 

    public function order()
    {
        return $this->belongsTo(Order::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function product()
    {
        return $this->belongsTo(Product::class);
    } 

    public function appointment_status()
    {
        return $this->belongsTo(AppointmentStatus::class);
    } 


}
