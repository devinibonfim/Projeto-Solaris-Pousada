<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email'=> 'admin@hotel.com',
            'password'=> bcrypt('admin123'),

            'admin' => 1,
            'funcionario' => 1,
            'hospede' => 1,
        ]);
    }
}
