<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'USD'],
            ['name' => 'EUR'],
        ];

  
        foreach ($data as $currency) {
            Currency::create($currency);
        }
    }
}
