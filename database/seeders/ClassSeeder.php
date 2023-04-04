<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();

        Schema::enableForeignKeyConstraints();
        $data = [
            ['name' => '1A', 'teacher_name' => 'Tono', 'teacher_id' => '4b71503f-0ea4-473b-b380-78ea80cf0077'],
            ['name' => '1B', 'teacher_name' => 'Mulyono', 'teacher_id' => '89ed61ae-4032-4e3e-8170-1adf65d5bdea'],
            ['name' => '1C', 'teacher_name' => 'Ani', 'teacher_id' => 'e1f6a4f0-8b18-4172-8f61-806cc857e6c4'],
            ['name' => '1D', 'teacher_name' => 'Siti', 'teacher_id' => 'baf2e1c2-c5d8-4d5f-9280-7d08c5f6ffba'],
            ['name' => '1E', 'teacher_name' => 'Bambang', 'teacher_id' => '11c61955-853c-4f4f-a75d-5512561b7f99'],
        ];
        foreach ($data as $key => $value) {
            ClassRoom::insert([
                'name' => $value['name'],
                'teacher_id' => $value['teacher_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id' => Str::uuid()->toString()
            ]);
        }
    }
}
