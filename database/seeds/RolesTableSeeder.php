<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'super-admin', 'description' => 'The super admin']);
        Role::create(['name' => 'webmaster', 'description' => 'The webmaster, with wide ranging powers']);
        Role::create(['name' => 'treasurer', 'description' => 'The treasurer, with access to the finanaces dashboard']);
    }
}
