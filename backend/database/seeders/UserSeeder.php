<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at =  Carbon::now()->toDateTimeString();
        DB::table('users')->insert([
            'email' => 'jovictor210@gmail.com',
            'name' => 'Calistu',
            'password' => Hash::make('123456'),
            'created_at' => $created_at
        ]);

        DB::table('oauth_clients')->insert([
            'name' => 'Development Password Grant Client',
            'id' => '97f6c705-d1da-4692-bdd1-e826e7ead79d',
            'secret' => 'rG2Kngd4HSZv9C8YXK5ddLjpmPyicWM9iHYp5qPD',
            'provider' => 'users',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
            'created_at' => $created_at
        ]);
    }
}
