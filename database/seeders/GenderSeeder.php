<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Gender;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path: 'database/json_data/genders.json');
        $data = collect(json_decode($jSonData));
        $data->each(function ($row) {
            Gender::create([
                'title'=>$row->title,
                'slug'=>Str::slug($row->title)
            ]);
        });  
    }
}
