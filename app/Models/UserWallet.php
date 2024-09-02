<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserWallet extends Model
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

    public function order()
    {
        return $this->belongsTo(Order::class);
    } 

    public function refer_a_friend()
    {
        return $this->belongsTo(ReferAFriend::class);
    } 



}
