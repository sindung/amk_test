<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Extracurricular::truncate();

        Schema::enableForeignKeyConstraints();
        $data = [
            ['name' => 'Basket'],
            ['name' => 'Voley'],
            ['name' => 'Football'],
            ['name' => 'PMI'],
            ['name' => 'Pramuka'],
        ];
        foreach ($data as $key => $value) {
            Extracurricular::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
