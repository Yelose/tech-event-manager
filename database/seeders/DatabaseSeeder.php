<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        $admin = User::where('email', 'admin@admin.com')->first();
        \App\Models\Event::factory(10)->create();
        DB::statement("SET foreign_key_checks=1");
        if ($admin) {
            $admin->delete();
        }
        $admin = User::create(
            [
                "name" => "admin",
                "email" => "admin@admin.com",
                "isAdmin" => true,
                "password" => Hash::make("admin")
            ]
        );
        $user = User::create(
            [
                "name" => "user",
                "email" => "user@user.com",
                "isAdmin" => false,
                "password" => Hash::make("user")
            ]
        );
    }
}
