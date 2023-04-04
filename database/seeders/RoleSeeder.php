<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();

        Schema::enableForeignKeyConstraints();
        $data = [
            ['id' => '690176ab-ae8f-4813-bc92-4b0a92a5d5d9', 'name' => 'Admin'],
            ['id' => '7aab8e73-af62-4959-aa09-e1bcfeefcded', 'name' => 'Teacher'],
            ['id' => '11436bb4-7c9a-4fae-b8e5-b39c07f3f972', 'name' => 'Student'],
            ['id' => 'afb22cbe-96f1-47d1-8f6c-554cefab1eba', 'name' => 'Superadmin'],
            ['id' => '83917a34-fa93-4693-a526-e4532f1d5a00', 'name' => 'Staff'],
        ];
        foreach ($data as $key => $value) {
            Role::insert([
                // 'id' => Str::uuid()->toString(),
                'id' => $value['id'],
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
