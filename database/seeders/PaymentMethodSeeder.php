<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PaymentMethod;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path: 'database/json_data/payment_methods.json');
        $data = collect(json_decode($jSonData));
        $data->each(function ($row) {
            PaymentMethod::create([
                'title'=>$row->title,
                'slug'=>Str::slug($row->title),
                'description'=>$row->description,
                'location_id'=>1
            ]);
        });  
    }
}

