<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolePrivilege extends Model
{
    use HasFactory, SoftDeletes;


    public function location()
    {
        return $this->belongsTo(Location::class);
    } 

    public function hr_employee_role()
    {
        return $this->belongsTo(HrEmployeeRole::class);
    } 

    public function privilege()
    {
        return $this->belongsTo(Privilege::class);
    } 

}
