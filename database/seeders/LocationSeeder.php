<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Location;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path: 'database/json_data/locations.json');
        $data = collect(json_decode($jSonData));
        $data->each(function ($row) {
            Location::create([
                'title'=>$row->title,
                'ukey'=>$row->ukey,
            ]);
        });  
    }
}
