<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PaymentStatus;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path: 'database/json_data/payment_statuses.json');
        $data = collect(json_decode($jSonData));
        $data->each(function ($row) {
            PaymentStatus::create([
                'title'=>$row->title,
                'slug'=>Str::slug($row->title),
                'color'=>$row->color,
                'location_id'=>1
            ]);
        });  
    }
}
