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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CategoryProductSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(LineItemSeeder::class);
    }
}
