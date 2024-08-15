<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    use HasRoles;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => "Admin",
                'email' => "admin@email.com",
                'password' => "admin123",
                'role' => "admin",
            ],
            [
                'name' => "Standard",
                'email' => "standard@email.com",
                'password' => "standard123",
                'role' => "standard",
            ],
        ];


        foreach ($users as $user) {
            $create_user = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);
            $create_user->assignRole($user['role']);
        };
    }
}
