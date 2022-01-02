<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'hadiuzzaman@gmail.com',
            'phone'=>'01516722237',
            'password'=>bcrypt('1111'),
            'role'=>'admin'
        ]);
    }
}
