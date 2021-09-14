<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BrandSeeder::class,
            UserSeeder::class,
            CategoriesSeeder::class,
            ProductSeeder::class,
            InvoiceSeeder::class,
            InvoiceDetailsSeeder::class
        ]);
    }
}
