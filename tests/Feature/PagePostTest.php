<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Page;

class PagePostTest extends TestCase
{
    /** @test */
    public function a_guest_cannot_create_pages()
    {
        $this->post('/admin/page')
             ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_regular_user_cannot_create_pages()
    {
        $this->signIn();

        $this->post('/admin/page')
             ->assertStatus(403);
    }

    /** @test */
    public function a_treasurer_user_cannot_create_pages()
    {
        $this->signIn($this->treasurer);

        $this->post('/admin/page')
             ->assertStatus(403);
    }

    /** @test */
    public function a_webmaster_can_create_pages()
    {
        $this->signIn($this->webmaster);

        $submission = $this->mockForm();

        $this->followingRedirects()
             ->post('/admin/page', $submission)
             ->assertSee($submission['title']);
    }

    /** @test */
    public function the_super_admin_can_create_pages()
    {
        $this->signIn($this->super);

        $submission = $this->mockForm();

        $this->followingRedirects()
             ->post('/admin/page', $submission)
             ->assertSee($submission['title']);
    }

    /** @test */
    public function it_does_not_allow_submission_of_invalid_input()
    {
        $this->signIn($this->webmaster);

        $this->post('/admin/page')
           ->assertSessionHasErrors();

        $this->json('post', '/admin/page')
           ->assertStatus(422);
    }

    /** @test */
    public function it_does_not_allow_submission_of_a_duplicate_index_uri()
    {
        $this->signIn($this->webmaster);

        $page = Page::factory()->make(['uri' => '']);
        $submission = $this->mockForm();
        $submission['uri'] = '';

        $this->post('/admin/page', $submission)
           ->assertSessionHasErrors();

        $this->json('post', '/admin/page', $submission)
           ->assertStatus(422);
    }

    /** @test */
    public function it_does_not_allow_submission_of_a_duplicate_uri()
    {
        $this->signIn($this->webmaster);

        $page = Page::factory()->make(['uri' => 'test']);
        $submission = $this->mockForm();
        $submission['uri'] = 'test';

        $this->post('/admin/page', $submission)
           ->assertSessionHasErrors();

        $this->json('post', '/admin/page', $submission)
           ->assertStatus(422);
    }

    /** @test */
    public function it_allows_updating_of_index_with_self()
    {
        $this->signIn($this->webmaster);

        $page_1 = Page::factory()->create(['uri' => '']);
        $submission = $page_1->toArray();
        $submission['title'] = 'A new title';

        $this->followingRedirects()
           ->put('/admin/page/' . $page_1->hashid, $submission)
           ->assertSee($submission['title']);
    }

    /** @test */
    public function it_allows_updating_of_non_index_with_self()
    {
        $this->signIn($this->webmaster);

        $page_1 = Page::factory()->create(['uri' => 'test']);
        $submission = $page_1->toArray();
        $submission['title'] = 'A new title';

        $this->followingRedirects()
           ->put('/admin/page/' . $page_1->hashid, $submission)
           ->assertSee($submission['title']);
    }

    /** @test */
    public function it_does_not_allow_updating_to_exisiting_index_uri()
    {
        $this->signIn($this->webmaster);
        // $this->withoutExceptionHandling();

        $page_1 = Page::factory()->create(['uri' => '', 'title' => 'An index']);
        $page_2 = Page::factory()->create(['uri' => 'test', 'title' => 'A second index']);

        $submission = $page_2->toArray();
        $submission['uri'] = '';

        $this->put('/admin/page/' . $page_2->hashid, $submission)
           ->assertSessionHasErrors();

        $this->json('put', '/admin/page/' . $page_2->hashid, $submission)
           ->assertStatus(422);
    }

    /** @test */
    public function it_does_not_allow_updating_to_exisiting_uri()
    {
        $this->signIn($this->webmaster);
        // $this->withoutExceptionHandling();

        $page_1 = Page::factory()->create(['uri' => 'existing', 'title' => 'A page']);
        $page_2 = Page::factory()->create(['uri' => 'existing2', 'title' => 'A page trying to have the same URI']);

        $submission = $page_2->toArray();
        $submission['uri'] = 'existing';

        $this->put('/admin/page/' . $page_2->hashid, $submission)
           ->assertSessionHasErrors();

        $this->json('put', '/admin/page/' . $page_2->hashid, $submission)
           ->assertStatus(422);
    }

    protected function mockForm()
    {
        $page = Page::factory()->make();
        $submission = $page->toArray();
        return $submission;
    }
}
