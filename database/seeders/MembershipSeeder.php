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
            ['membership_name' => 'Express', 'membership_price' => 0],
            ['membership_name' => 'Lite', 'membership_price' => 100000],
            ['membership_name' => 'Premium', 'membership_price' => 250000],
        ];
        DB::table('memberships')->insert($data);
    }
}
