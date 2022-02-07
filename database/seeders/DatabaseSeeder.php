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
        $this->call(ContactSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
