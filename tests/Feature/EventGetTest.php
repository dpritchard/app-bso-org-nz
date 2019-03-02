<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Event;
use App\Category;
use App\Contact;

class EventGetTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->event = create(Event::class);
        $this->event->contact()->associate(create('App\Contact'));
        $this->event->category()->associate(Category::find(3));
        $this->event->save();

        $this->edit_link = '/admin/event/' . $this->event->hashid . '/edit';
        $this->create_link = '/admin/event/create';
        $this->index_link = '/admin/event';
    }

    /** @test */
    public function it_can_display_a_future_event()
    {
        $this->event->start = now()->addWeeks(2);

        $this->event->save();

        $response = $this->get('/diary');

        $response->assertStatus(200);

        $response->assertSee($this->event->description);
    }

    /** @test */
    public function it_can_display_a_past_event()
    {
        $this->event->start = now()->subWeeks(2);

        $this->event->save();

        $response = $this->get('/past-events');

        $response->assertStatus(200);

        $response->assertSee($this->event->description);
    }

    /** @test */
    public function a_guest_can_view_event_detials()
    {
        $response = $this->get($this->event->path());

        $response->assertStatus(200);

        $response->assertSee($this->event->description);
    }

    /** @test */
    public function a_guest_cannot_see_the_edit_link()
    {
        $response = $this->get($this->event->path());

        $response->assertDontSee($this->edit_link);
    }

    /** @test */
    public function a_regular_user_cannot_see_the_edit_link()
    {
        $this->signIn();

        $response = $this->get($this->event->path());

        $response->assertDontSee($this->edit_link);
    }

    /** @test */
    public function a_treasurer_cannot_see_the_edit_link()
    {
        $this->signIn($this->treasurer);

        $response = $this->get($this->event->path());

        $response->assertDontSee($this->edit_link);
    }

    /** @test */
    public function a_webmaster_can_see_the_edit_link()
    {
        $this->signIn($this->webmaster);

        $response = $this->get($this->event->path());

        $response->assertSee($this->edit_link);
    }

    /** @test */
    public function a_super_admin_can_see_the_edit_link()
    {
        $this->signIn($this->super);

        $response = $this->get($this->event->path());

        $response->assertSee($this->edit_link);
    }

    /** @test */
    public function a_guest_cannot_see_the_edit_page()
    {
        $this->get($this->edit_link)
             ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_regular_user_cannot_see_the_edit_page()
    {
        $this->signIn();

        $this->get($this->edit_link)
             ->assertStatus(403);
    }

    /** @test */
    public function a_treasurer_cannot_see_the_edit_page()
    {
        $this->signIn($this->treasurer);

        $this->get($this->edit_link)
             ->assertStatus(403);
    }

    /** @test */
    public function a_webmaster_can_see_the_edit_page()
    {
        $this->signIn($this->webmaster);

        $this->get($this->edit_link)
             ->assertStatus(200);
    }

    /** @test */
    public function the_super_admin_can_see_the_edit_page()
    {
        $this->signIn($this->super);

        $this->get($this->edit_link)
             ->assertStatus(200);
    }

    /** @test */
    public function a_guest_cannot_see_the_create_page()
    {
        $this->get($this->create_link)
             ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_regular_user_cannot_see_the_create_page()
    {
        $this->signIn();

        $this->get($this->create_link)
             ->assertStatus(403);
    }

    /** @test */
    public function a_treasurer_cannot_see_the_create_page()
    {
        $this->signIn($this->treasurer);

        $this->get($this->create_link)
             ->assertStatus(403);
    }

    /** @test */
    public function a_webmaster_can_see_the_create_page()
    {
        $this->signIn($this->webmaster);

        $this->get($this->create_link)
             ->assertStatus(200);
    }

    /** @test */
    public function the_super_admin_can_see_the_create_page()
    {
        $this->signIn($this->super);

        $this->get($this->create_link)
             ->assertStatus(200);
    }

    /** @test */
    public function a_guest_cannot_see_the_event_admin_index_page()
    {
        $this->get($this->index_link)
             ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_regular_user_cannot_see_the_event_admin_index_page()
    {
        $this->signIn();

        $this->get($this->index_link)
             ->assertStatus(403);
    }

    /** @test */
    public function a_webmaster_can_see_the_event_admin_index_page()
    {
        $this->signIn($this->webmaster);

        $this->get($this->index_link)
             ->assertStatus(200);
    }

    /** @test */
    public function the_super_admin_can_see_the_event_admin_index_page()
    {
        $this->signIn($this->super);

        $this->get($this->index_link)
             ->assertStatus(200);
    }
}
