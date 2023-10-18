<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoice::create([
            'table_number' => 1,
            'item_list' => json_encode(['tea', 'cocacola']),
            'shop_name' => json_encode(['teashop']),
            'price_list' => json_encode([1000, 700]),
            'total_amount' => 1700
        ]);

        Invoice::create([
            'table_number' => 2,
            'item_list' => json_encode(['tea', 'cocacola', 'snack']),
            'shop_name' => json_encode(['teashop']),
            'price_list' => json_encode([1000, 700, 300]),
            'total_amount' => 200
        ]);
    }
}
