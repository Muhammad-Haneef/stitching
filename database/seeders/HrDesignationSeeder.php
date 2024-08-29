<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\HrDesignation;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HrDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path: 'database/json_data/hr_designations.json');
        $data = collect(json_decode($jSonData));
        $data->each(function ($row) {
            HrDesignation::create([
                'title'=>$row->title,
                'location_id'=>1
            ]);
        });  
    }
}
