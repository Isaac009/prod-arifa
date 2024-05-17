<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'titles' => 'admin',
            'name' => 'Super Admin',
            'email' => 'admin@arifa.org.tz',
            'password' => 'secret@123',
            'address' => 'Admin\'s Home',
            'country_id'=> '1',
            'state_id' => '1',
            'city_id' => '1',
            'zip_code' => '89182',
            'date_of_birth' => '1973-12-11',
            'joined_since'=> '2023-12-09',
            'bio'=> 'Here Admin does not need to provide his biograph he only need to work.'
        ]);
    }
}
