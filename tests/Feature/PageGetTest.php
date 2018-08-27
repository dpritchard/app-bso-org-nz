<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Page;

class PageGetTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->page = create(Page::class);

        $this->edit_link = '/admin/page/' . $this->page->hashid . '/edit';
        $this->create_link = '/admin/page/create';
        $this->index_link = '/admin/page';
    }

    /** @test */
    public function it_interprets_an_empty_uri_as_the_index()
    {
        $page = create(Page::class, ['uri' => '']);

        $this->get('/')
             ->assertStatus(200);
    }

    /** @test */
    public function it_can_load_and_parse_markdown_to_a_page()
    {
        $response = $this->get($this->page->uri);

        $response->assertStatus(200);

        $response->assertSee('<p>'.$this->page->body.'</p>');
    }

    /** @test */
    public function it_throws_a_404_when_not_found()
    {
        $this->get('/a/missing/page')
             ->assertStatus(404);
    }

    /** @test */
    public function a_guest_cannot_see_the_edit_link()
    {
        $response = $this->get($this->page->uri);

        $response->assertDontSee($this->edit_link);
    }

    /** @test */
    public function a_regular_user_cannot_see_the_edit_link()
    {
        $this->signIn();

        $response = $this->get($this->page->uri);

        $response->assertDontSee($this->edit_link);
    }

    /** @test */
    public function a_treasurer_cannot_see_the_edit_link()
    {
        $this->signIn($this->treasurer);

        $response = $this->get($this->page->uri);

        $response->assertDontSee($this->edit_link);
    }

    /** @test */
    public function a_webmaster_can_see_the_edit_link()
    {
        $this->signIn($this->webmaster);

        $response = $this->get($this->page->uri);

        $response->assertSee($this->edit_link);
    }

    /** @test */
    public function a_super_admin_can_see_the_edit_link()
    {
        $this->signIn($this->super);

        $response = $this->get($this->page->uri);

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
        $this->get('/admin/page/create')
             ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_regular_user_cannot_see_the_create_page()
    {
        $this->signIn();

        $this->get('/admin/page/create')
             ->assertStatus(403);
    }

    /** @test */
    public function a_treasurer_cannot_see_the_create_page()
    {
        $this->signIn($this->treasurer);

        $this->get('/admin/page/create')
             ->assertStatus(403);
    }

    /** @test */
    public function a_webmaster_can_see_the_create_page()
    {
        $this->signIn($this->webmaster);

        $this->get('/admin/page/create')
             ->assertStatus(200);
    }

    /** @test */
    public function the_super_admin_can_see_the_create_page()
    {
        $this->signIn($this->super);

        $this->get('/admin/page/create')
             ->assertStatus(200);
    }
}
