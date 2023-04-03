<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();

        Schema::enableForeignKeyConstraints();
        $data = [
            ['name' => 'Admin', 'email' => 'admin@mail.com', 'password' => 'admin', 'role_id' => 1],
            ['name' => 'Superadmin', 'email' => 'superadmin@mail.com', 'password' => 'superadmin', 'role_id' => 2],
            ['name' => 'Staff', 'email' => 'staff@mail.com', 'password' => 'staff', 'role_id' => 3],
            ['name' => 'Teacher', 'email' => 'teacher@mail.com', 'password' => 'teacher', 'role_id' => 4],
            ['name' => 'Student', 'email' => 'student@mail.com', 'password' => 'student', 'role_id' => 5],
        ];
        foreach ($data as $key => $value) {
            User::insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'role_id' => $value['role_id'],
                'password' => password_hash($value['password'], PASSWORD_DEFAULT),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
