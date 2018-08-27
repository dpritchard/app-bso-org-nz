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
        $this->call(ContactsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
