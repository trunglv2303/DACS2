<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [ 'name'=> 'LeVanTrung',
                'email'=>'trunglv.22itb@vku.udn.vn ',
                'number_phone'=>'0374023927',
                'password' => Hash::make('admin'),
               
     
            ]
        );
    }
}
