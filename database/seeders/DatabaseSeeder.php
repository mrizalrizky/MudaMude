<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('users')->insert(
        //     ['name' => 'Muhammad Rizal Rizky Naufal',
        //      'username' => 'mrizalrizky',
        //      'email' => 'mrizalrn@gmail.com',
        //      'password' => '123456',
        //      'phone' => '08119000836',
        //      'institution' => 'Bina Nusantara']
        // );
        $this->call(MembershipSeeder::class);
    }
}
