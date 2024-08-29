<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SupportType;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SupportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path: 'database/json_data/support_types.json');
        $data = collect(json_decode($jSonData));
        $data->each(function ($row) {
            SupportType::create([
                'title'=>$row->title,
                'slug'=>Str::slug($row->title),
                'location_id'=>1
            ]);
        });  
    }
}
