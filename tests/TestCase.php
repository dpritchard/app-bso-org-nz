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

    public function setUp()
    {
      parent::setUp();

      $this->super = create(User::class);
      $this->super->roles()->attach(Role::create(['name' => 'super-admin', 'description' => 'sa']));

      $this->webmaster = create(User::class);
      $this->webmaster->roles()->attach(Role::create(['name' => 'webmaster', 'description' => 'wm']));

      $this->treasurer = create(User::class);
      $this->treasurer->roles()->attach(Role::create(['name' => 'treasurer', 'description' => 'tr']));
    }

    protected function signIn($user = null)
    {
        $user = $user ?: create('App\User');
        $this->actingAs($user);
        return $this;
    }
}
