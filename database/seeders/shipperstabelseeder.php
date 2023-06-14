<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class shipperstabelseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shipper::factory()->count(2)->create();
    }
}
