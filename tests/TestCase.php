<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Role;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use RefreshDatabase;

    protected $super;

    protected $webmaster;

    protected $treasurer;

    public function setUp(): void
    {
        parent::setUp();

        $this->super = User::factory()->create();
        $this->super->roles()->attach(Role::create(['name' => 'super-admin', 'description' => 'sa']));

        $this->webmaster = User::factory()->create();
        $this->webmaster->roles()->attach(Role::create(['name' => 'webmaster', 'description' => 'wm']));

        $this->treasurer = User::factory()->create();
        $this->treasurer->roles()->attach(Role::create(['name' => 'treasurer', 'description' => 'tr']));
    }

    protected function signIn($user = null)
    {
        $user = $user ?: User::factory()->create();
        $this->actingAs($user);
        return $this;
    }
}
