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
            'membership_name' => 'Lite',
            'membership_price' => 100000,
        ];
        DB::table('memberships')->insert($data);
    }
}
