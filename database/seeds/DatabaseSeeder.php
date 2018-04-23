<?php

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
			CategoriesTableSeeder::class,
			SubcategoriesTableSeeder::class,
			BrandsTableSeeder::class,
			DeliveryTypesTableSeeder::class,
			PaymentMethodsTableSeeder::class
		]);
    }
}
