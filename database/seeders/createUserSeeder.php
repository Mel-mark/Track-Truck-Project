<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\drivers;
class createUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [[
               'firstname'=>'Admin',
               'lastname'=>'Min',
               'username'=>'Admin',
               'contact'=>'1234',
               'email'=>'admin@admin.com',                
               'password'=> bcrypt('123'),
               'is_Admin'=>'1', 
            ],
            [   
               'firstname'=>'User',
               'lastname'=>'Name',
               'username'=>'User',
               'contact'=>'1234',
               'email'=>'user@user.com',                   
               'password'=> bcrypt('123'),
               'is_Admin'=>'0',
            ],
        ];
        // $drivers =[[
        //     'driverName'=>'Alfred Del Monte',
        //     'contact'=>'09843275432',
        //     'national_id'=>'PSN-123-456-789',
        //     'license_no'=>'987 654 321',
        //     'license_exp'=>'2025-06-24',
        //     'address'=>'#69 Otero Ave, Mabayuan, Olongapo City',
        //     'truck_name'=>'Butchokoy',
        //     'chasis_no'=>'LJ43CXBS094728',
        //     'description'=>'12 wheeler',
        // ]];

        foreach ($user as $key => $value) {
            User::create($value);
        }
        // foreach ($drivers as $key => $value) {
        //     User::create($value);
        // }
    }
}
