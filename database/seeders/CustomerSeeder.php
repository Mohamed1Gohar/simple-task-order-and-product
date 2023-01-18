<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'mohamed gohar',
            'email' => 'mohamedgohar365@gmail.com',
            'phone' => '01099371188',
        ]);
    }
}
