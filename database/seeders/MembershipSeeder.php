<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Express', 'price' => 0],
            ['name' => 'Lite', 'price' => 100000],
            ['name' => 'Premium', 'price' => 250000],
        ];
        DB::table('memberships')->insert($data);
    }
}
