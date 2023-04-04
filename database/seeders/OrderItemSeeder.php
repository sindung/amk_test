<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        OrderItem::truncate();

        Schema::enableForeignKeyConstraints();
        $data = [
            ['order_id' => 1, 'item_id' => 1, 'qty' => 4, 'price' => 5.00, 'discount' => 2.00, 'total' => 18.00, 'note' => 'notes sample'],
        ];
        foreach ($data as $key => $value) {
            OrderItem::insert([
                'id' => Str::uuid()->toString(),
                'order_id' => $value['order_id'],
                'item_id' => $value['item_id'],
                'qty' => $value['qty'],
                'price' => $value['price'],
                'discount' => $value['discount'],
                'total' => $value['total'],
                'note' => $value['note'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
