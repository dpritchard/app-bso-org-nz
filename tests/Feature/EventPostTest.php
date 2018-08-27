<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Event;
use App\Category;
use App\Contact;

class EventPostTest extends TestCase
{
    /** @test */
    function a_guest_cannot_create_events()
    {
        $this->post('/admin/event')
             ->assertRedirect(route('login'));
    }

    /** @test */
    function a_regular_user_cannot_create_events()
    {
        $this->signIn();

        $this->post('/admin/event')
             ->assertStatus(403);
    }

    /** @test */
    function a_treasurer_user_cannot_create_events()
    {
        $this->signIn($this->treasurer);

        $this->post('/admin/event')
             ->assertStatus(403);
    }

    /** @test */
    function a_webmaster_can_create_events()
    {
        $this->signIn($this->webmaster);

        $submission = $this->mockForm();

        $this->followingRedirects()
             ->post('/admin/event', $submission)
             ->assertSee($submission['title']);
    }

    /** @test */
    function the_super_admin_can_create_events()
    {
        $this->signIn($this->super);

        $submission = $this->mockForm();

        $this->followingRedirects()
             ->post('/admin/event', $submission)
             ->assertSee($submission['title']);
    }

    /** @test */
    function it_does_not_allow_submission_of_invalid_input()
    {
      $this->signIn($this->webmaster);

      $this->post('/admin/event')
           ->assertSessionHasErrors();

      $this->json('post', '/admin/event')
           ->assertStatus(422);
    }

    protected function mockForm()
    {
        $event = make(Event::class);
        $event->start->format('Y-m-d H:i');
        $submission = $event->toArray();
        $submission['start'] = $event->start->format('Y-m-d H:i');
        $submission['finish'] = optional($event->finish)->format('Y-m-d H:i');
        $submission['contact_name'] = create('App\Contact')->name;
        $submission['category'] = create('App\Category')->id;
        return $submission;
    }

}
