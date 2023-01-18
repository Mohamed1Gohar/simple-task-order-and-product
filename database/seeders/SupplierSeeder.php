<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'name' => 'supplier mohamed',
            'phone' => '01099371188',
            'email' => 'supplier_mohamed@gmail.com',
        ]);
    }
}
