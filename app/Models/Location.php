<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, SoftDeletes;

    public function refer_a_friend()
    {
        return $this->hasMany(ReferAFriend::class);
    } 

    public function hr_employee_roles()
    {
        return $this->hasMany(HrEmployeeRole::class);
    } 

}
