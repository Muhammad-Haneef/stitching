<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AppointmentStatus;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AppointmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path: 'database/json_data/appointment_statuses.json');
        $data = collect(json_decode($jSonData));
        $data->each(function ($row) {
            AppointmentStatus::create([
                'title'=>$row->title,
                'slug'=>Str::slug($row->title),
                'location_id'=>1
            ]);
        });  
    }
}
