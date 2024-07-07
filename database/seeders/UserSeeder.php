<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'userId' => Str::orderedUuid(),
            'name' => 'Superadmin',
            'email' => 'superadmin@medquest.co.id',
            'username' => strtolower(str_replace(' ', '_', 'Superadmin')),
            'password' => Hash::make('SuperadminITD')
        ]);

        User::create([
            'userId' => Str::orderedUuid(),
            'name' => 'Admin',
            'email' => 'admin@medquest.co.id',
            'username' => 'admin',
            'password' => Hash::make('Calibration24!')
        ]);

        User::create([
            'userId' => Str::orderedUuid(),
            'name' => 'Muh Ardyansyah',
            'email' => 'muh.ardyansyah@medquest.co.id',
            'username' => 'muh.ardyansyah',
            'password' => Hash::make('Calibration24!')
        ]);

        User::create([
            'userId' => Str::orderedUuid(),
            'name' => 'Galuh Kurniawan',
            'email' => 'galuh.kurniawan@medquest.co.id',
            'username' => 'galuh.kurniawan',
            'password' => Hash::make('Calibration24!')
        ]);
        
        // $superadmin = User::create([
        //     'userId' => Str::orderedUuid(),
        //     'name' => 'Superadmin',
        //     'email' => 'superadmin@medquest.co.id',
        //     'username' => strtolower(str_replace(' ', '_', 'Superadmin')),
        //     'password' => Hash::make('SuperadminITD')
        // ]);
        // $superadmin->assignRole('Superadmin');

        // $admin = User::create([
        //     'userId' => Str::orderedUuid(),
        //     'name' => 'Admin',
        //     'email' => 'admin@medquest.co.id',
        //     'username' => 'admin',
        //     'password' => Hash::make('Calibration24!')
        // ]);
        // $admin->assignRole('Admin');

        // $admin2 = User::create([
        //     'userId' => Str::orderedUuid(),
        //     'name' => 'Muh Ardyansyah',
        //     'email' => 'muh.ardyansyah@medquest.co.id',
        //     'username' => 'muh.ardyansyah',
        //     'password' => Hash::make('Calibration24!')
        // ]);
        // $admin2->assignRole('Superadmin');

        // $manager = User::create([
        //     'userId' => Str::orderedUuid(),
        //     'name' => 'Galuh Kurniawan',
        //     'email' => 'galuh.kurniawan@medquest.co.id',
        //     'username' => 'galuh.kurniawan',
        //     'password' => Hash::make('Calibration24!')
        // ]);
        // $manager->assignRole('Manager');



    }
}
