<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

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
            ['id' => 'e4f18a9a-f8fc-4a08-8ee2-6af912c66c2b', 'name' => 'Admin', 'email' => 'admin@mail.com', 'password' => 'admin', 'role_id' => '690176ab-ae8f-4813-bc92-4b0a92a5d5d9'],
            ['id' => 'd50b6e63-9fa4-46c5-b7a1-044f6d382d68', 'name' => 'Superadmin', 'email' => 'superadmin@mail.com', 'password' => 'superadmin', 'role_id' => 'afb22cbe-96f1-47d1-8f6c-554cefab1eba'],
            ['id' => '7a809e64-c050-4b2f-a185-9a29db124c23', 'name' => 'Staff', 'email' => 'staff@mail.com', 'password' => 'staff', 'role_id' => '83917a34-fa93-4693-a526-e4532f1d5a00'],
            ['id' => 'e358ee88-2d3f-4620-82a5-9b31cf490025', 'name' => 'Teacher', 'email' => 'teacher@mail.com', 'password' => 'teacher', 'role_id' => '7aab8e73-af62-4959-aa09-e1bcfeefcded'],
            ['id' => 'c8d554b9-5940-4d99-85a8-ab8791144bfb', 'name' => 'Student', 'email' => 'student@mail.com', 'password' => 'student', 'role_id' => '11436bb4-7c9a-4fae-b8e5-b39c07f3f972'],
        ];
        foreach ($data as $key => $value) {
            User::insert([
                // 'id' => Str::uuid()->toString(),
                'id' => $value['id'],
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
