<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at =  Carbon::now()->toDateTimeString();
        DB::table('categories')->insert([
            [
                'name' => 'Casa e decoração',
                'created_at' => $created_at
            ], [
                'name' => 'Alimentos e bebidas',
                'created_at' => $created_at
            ], [
                'name' => 'Produtos de Moda',
                'created_at' => $created_at
            ], [
                'name' => 'Produtos de Beleza',
                'created_at' => $created_at
            ], [
                'name' => 'Eletrônicos',
                'created_at' => $created_at
            ], [
                'name' => 'Produtos de Saúde',
                'created_at' => $created_at
            ], [
                'name' => 'Eletrodomésticos',
                'created_at' => $created_at
            ], [
                'name' => 'Celulares e dispositivos',
                'created_at' => $created_at
            ], [
                'name' => 'Brinquedos e hobbies',
                'created_at' => $created_at
            ],
        ]);
    }
}
