<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ApiTest extends TestCase
{
    #[Test]
    public function a_guest_cannot_access_the_markdown_endpoint()
    {
        $this->post('/api/render-md', ['input' => '**bold**'])
             ->assertRedirect(route('login'));
    }

    #[Test]
    public function an_authenticated_user_can_render_markdown()
    {
        $this->signIn();

        $response = $this->post('/api/render-md', ['input' => '**bold**']);

        $response->assertStatus(200);
        $response->assertSee('<strong>bold</strong>', false);
    }

    #[Test]
    public function the_markdown_endpoint_returns_block_level_output()
    {
        // The API is used by the editor preview — output should be full block HTML
        $this->signIn();

        $response = $this->post('/api/render-md', ['input' => 'hello']);

        $response->assertStatus(200);
        $this->assertStringContainsString('<p>hello</p>', $response->getContent());
    }
}
