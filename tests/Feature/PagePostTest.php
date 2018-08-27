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

    /** @test */
    function it_does_not_allow_submission_of_a_duplicate_index_uri()
    {
      $this->signIn($this->webmaster);

      $page = create(Page::class, ['uri' => '']);
      $submission = $this->mockForm();
      $submission['uri'] = '';

      $this->post('/admin/page', $submission)
           ->assertSessionHasErrors();

      $this->json('post', '/admin/page', $submission)
           ->assertStatus(422);
    }

    /** @test */
    function it_does_not_allow_submission_of_a_duplicate_uri()
    {
      $this->signIn($this->webmaster);

      $page = create(Page::class, ['uri' => 'test']);
      $submission = $this->mockForm();
      $submission['uri'] = 'test';

      $this->post('/admin/page', $submission)
           ->assertSessionHasErrors();

      $this->json('post', '/admin/page', $submission)
           ->assertStatus(422);
    }

    /** @test */
    function it_allows_updating_of_index_with_self()
    {
      $this->signIn($this->webmaster);

      $page_1 = create(Page::class, ['uri' => '']);
      $submission = $page_1->toArray();
      $submission['title'] = 'A new title';

      $this->followingRedirects()
           ->put('/admin/page/' . $page_1->hashid, $submission)
           ->assertSee($submission['title']);
    }

    /** @test */
    function it_allows_updating_of_non_index_with_self()
    {
      $this->signIn($this->webmaster);

      $page_1 = create(Page::class, ['uri' => 'test']);
      $submission = $page_1->toArray();
      $submission['title'] = 'A new title';

      $this->followingRedirects()
           ->put('/admin/page/' . $page_1->hashid, $submission)
           ->assertSee($submission['title']);
    }

    /** @test */
    function it_does_not_allow_updating_to_exisiting_index_uri()
    {
      $this->signIn($this->webmaster);

      $page_1 = create(Page::class, ['uri' => '']);
      $page_2 = create(Page::class, ['uri' => 'test']);

      $submission = $page_2->toArray();
      $submission['uri'] = '';

      $this->put('/admin/page/' . $page_2->hashid, $submission)
           ->assertSessionHasErrors();

      $this->json('put', '/admin/page/' . $page_2->hashid, $submission)
           ->assertStatus(422);
    }

    /** @test */
    function it_does_not_allow_updating_to_exisiting_uri()
    {
      $this->signIn($this->webmaster);

      $page_1 = create(Page::class, ['uri' => 'test']);
      $page_2 = create(Page::class, ['uri' => 'test2']);

      $submission = $page_2->toArray();
      $submission['uri'] = 'test';

      $this->put('/admin/page/' . $page_2->hashid, $submission)
           ->assertSessionHasErrors();

      $this->json('put', '/admin/page/' . $page_2->hashid, $submission)
           ->assertStatus(422);
    }

    protected function mockForm()
    {
        $page = make(Page::class);
        $submission = $page->toArray();
        return $submission;
    }

}
