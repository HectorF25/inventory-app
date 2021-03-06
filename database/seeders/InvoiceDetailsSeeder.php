<?php

namespace Database\Seeders;

use App\Models\InvoiceDetails;
use Illuminate\Database\Seeder;

class InvoiceDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InvoiceDetails::factory(15)->create();
    }
}
