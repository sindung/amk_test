<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Teacher::truncate();

        Schema::enableForeignKeyConstraints();
        $data = [
            ['id' => '11c61955-853c-4f4f-a75d-5512561b7f99', 'name' => 'Bambang'],
            ['id' => '4b71503f-0ea4-473b-b380-78ea80cf0077', 'name' => 'Tono'],
            ['id' => '89ed61ae-4032-4e3e-8170-1adf65d5bdea', 'name' => 'Mulyono'],
            ['id' => 'baf2e1c2-c5d8-4d5f-9280-7d08c5f6ffba', 'name' => 'Siti'],
            ['id' => 'e1f6a4f0-8b18-4172-8f61-806cc857e6c4', 'name' => 'Ani'],
        ];
        foreach ($data as $key => $value) {
            Teacher::insert([
                // 'id' => Str::uuid()->toString(),
                'id' => $value['id'],
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
