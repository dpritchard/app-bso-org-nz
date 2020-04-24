<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->event_admin_link = '/admin/event';
        $this->page_admin_link = '/admin/page';
        $this->file_admin_link = '/admin/file';
        $this->subscription_admin_link = '/admin/subscription';
    }

    /** @test */
    public function a_guest_cannot_see_the_dashboard()
    {
        $this->get('/admin')
             ->assertStatus(302);
    }

    /** @test */
    public function a_regular_user_cannot_see_the_dashboard()
    {
        $this->signIn();

        $this->get('/admin')
             ->assertStatus(403);
    }

    /** @test */
    public function a_treasurer_can_see_the_dashboard()
    {
        // $this->withoutExceptionHandling();
        $this->signIn($this->treasurer);

        $this->get('/admin')
             ->assertStatus(200);
    }

    /** @test */
    public function a_webmaster_can_see_the_dashboard()
    {
        $this->signIn($this->webmaster);

        $this->get('/admin')
             ->assertStatus(200);
    }

    /** @test */
    public function a_super_admin_can_see_the_dashboard()
    {
        $this->signIn($this->super);

        $this->get('/admin')
             ->assertStatus(200);
    }

    /** @test */
    public function a_treasurer_can_see_the_subscription_link_only()
    {
        $this->signIn($this->treasurer);

        $response = $this->get('/admin');

        $response->assertDontSee($this->event_admin_link);

        $response->assertDontSee($this->page_admin_link);

        $response->assertDontSee($this->file_admin_link);

        $response->assertSee($this->subscription_admin_link);
    }

    /** @test */
    public function a_webmaster_can_see_the_event_and_page_link_only()
    {
        $this->signIn($this->webmaster);

        $response = $this->get('/admin');

        $response->assertSee($this->event_admin_link);

        $response->assertSee($this->page_admin_link);

        $response->assertDontSee($this->file_admin_link);

        $response->assertDontSee($this->subscription_admin_link);
    }

    /** @test */
    public function a_super_admin_can_see_all_links()
    {
        $this->signIn($this->super);

        $response = $this->get('/admin');

        $response->assertSee($this->event_admin_link);

        $response->assertSee($this->page_admin_link);

        $response->assertSee($this->file_admin_link);

        $response->assertSee($this->subscription_admin_link);
    }
}
