<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at =  Carbon::now()->toDateTimeString();
        DB::table('providers')->insert([
            'name' => 'Shopee',
            'url' => 'https://partner.shopeemobile.com/api/v2/',
            'logo' => 'https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/ca5d12864c12916c05640b36e47ac5c9.png',
            'created_at' => $created_at
        ]);
    }
}
