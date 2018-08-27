<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Page;

class PagePostTest extends TestCase
{
    /** @test */
    function a_guest_cannot_create_pages()
    {
        $this->post('/admin/page')
             ->assertRedirect(route('login'));
    }

    /** @test */
    function a_regular_user_cannot_create_pages()
    {
        $this->signIn();

        $this->post('/admin/page')
             ->assertStatus(403);
    }

    /** @test */
    function a_treasurer_user_cannot_create_pages()
    {
        $this->signIn($this->treasurer);

        $this->post('/admin/page')
             ->assertStatus(403);
    }

    /** @test */
    function a_webmaster_can_create_pages()
    {
        $this->signIn($this->webmaster);

        $submission = $this->mockForm();

        $this->followingRedirects()
             ->post('/admin/page', $submission)
             ->assertSee($submission['title']);
    }

    /** @test */
    function the_super_admin_can_create_pages()
    {
        $this->signIn($this->super);

        $submission = $this->mockForm();

        $this->followingRedirects()
             ->post('/admin/page', $submission)
             ->assertSee($submission['title']);
    }

    /** @test */
    function it_does_not_allow_submission_of_invalid_input()
    {
      $this->signIn($this->webmaster);

      $this->post('/admin/page')
           ->assertSessionHasErrors();

      $this->json('post', '/admin/page')
           ->assertStatus(422);
    }

    protected function mockForm()
    {
        $page = make(Page::class);
        $submission = $page->toArray();
        return $submission;
    }

}
