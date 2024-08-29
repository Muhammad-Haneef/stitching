<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\HrDepartment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HrDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path: 'database/json_data/hr_departments.json');
        $data = collect(json_decode($jSonData));
        $data->each(function ($row) {
            HrDepartment::create([
                'title'=>$row->title,
                'location_id'=>1
            ]);
        });  
    }
}
