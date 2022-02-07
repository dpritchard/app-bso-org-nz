<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['type' => 'Field Trip']);
        Category::create(['type' => 'Talk / Seminar']);
        Category::create(['type' => 'Workshop']);
        Category::create(['type' => 'Social Event']);
        Category::create(['type' => 'Notice']);
    }
}
