<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, SoftDeletes;

    public function role_privileges()
    {
        return $this->hasMany(RolePrivilege::class);
    } 

    public function payment_statuses()
    {
        return $this->hasMany(PaymentStatus::class);
    } 

    public function refer_a_friend()
    {
        return $this->hasMany(ReferAFriend::class);
    } 

    public function hr_employee_roles()
    {
        return $this->hasMany(HrEmployeeRole::class);
    } 

}
