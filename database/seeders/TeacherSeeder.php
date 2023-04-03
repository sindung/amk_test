<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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
            ['name' => 'Bambang'],
            ['name' => 'Tono'],
            ['name' => 'Mulyono'],
            ['name' => 'Siti'],
            ['name' => 'Ani'],
        ];
        foreach ($data as $key => $value) {
            Teacher::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
