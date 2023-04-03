<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Order::truncate();

        Schema::enableForeignKeyConstraints();
        $data = [
            ['code' => '0101001', 'customer_id' => 1, 'address' => 'test', 'subtotal' => '4', 'discount' => '2', 'total' => '2'],
        ];
        foreach ($data as $key => $value) {
            Order::insert([
                'code' => $value['code'],
                'date' => Carbon::now(),
                'customer_id' => $value['customer_id'],
                'address' => $value['address'],
                'subtotal' => $value['subtotal'],
                'discount' => $value['discount'],
                'total' => $value['total'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
