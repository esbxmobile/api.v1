<?php

use Api\Models\Box;
use Api\Models\User;
use Api\Models\Vehicle;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Giovani
 * Date: 10/4/2016
 * Time: 1:27 PM
 */
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'name' => 'renter',
            'email' => 'renter@user.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
            'birthday' => '11/11/1111',
            'role' => 'renter'
        ])->vehicle()->save(factory(Vehicle::class)->make());

        factory(User::class)->create([
            'name' => 'driver',
            'email' => 'driver@user.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
            'birthday' => '22/22/2222',
            'role' => 'advertiser',
            'license' => 'abcdfgh',
            'type_license' => 'B'
        ])->box()->save(factory(Box::class)->make());

        factory(User::class, 5)->create()->each(function ($user){
            $user->box()->save(factory(Box::class)->make());
        });

        factory(User::class, 5)->create()->each(function ($user){
            $user->vehicle()->save(factory(Vehicle::class)->make());
        });

        factory(User::class, 5)->create([
           'role' => 'renter'
        ]);

        factory(User::class, 5)->create([
            'role' => 'advertiser'
        ]);
    }
}