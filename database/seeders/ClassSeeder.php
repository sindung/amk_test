<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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
            ['name' => '1A', 'teacher_id' => 5],
            ['name' => '1B', 'teacher_id' => 1],
            ['name' => '1C', 'teacher_id' => 3],
            ['name' => '1D', 'teacher_id' => 4],
        ];
        foreach ($data as $key => $value) {
            ClassRoom::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
