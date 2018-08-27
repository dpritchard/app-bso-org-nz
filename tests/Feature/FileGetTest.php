<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;

use App\File;

class FileGetTest extends TestCase
{
    /** @test */
    function a_guest_cannot_access_a_private_file()
    {
        $file = create(File::class, ['visibility' => 'private']);

        $this->get($file->path())
             ->assertRedirect(route('login'));

        $this->expectException('Illuminate\Auth\AuthenticationException');
        $this->withoutExceptionHandling()
             ->get($file->path());
    }

    /** @test */
    function a_regular_user_can_access_a_private_file()
    {
        $this->signIn();

        Storage::fake();
        Storage::disk()->put('test.file', 'NOTHING');
        $file = create(File::class, ['visibility' => 'private', 'storage_path' => 'test.file']);

        $this->get($file->path())
             ->assertStatus(200);
    }

    /** @test */
    function a_guest_cannot_see_the_file_admin_index()
    {
        $this->get('/admin/file')
             ->assertRedirect(route('login'));

        $this->expectException('Illuminate\Auth\AuthenticationException');
        $this->withoutExceptionHandling()
             ->get('/admin/file');
    }

    /** @test */
    function a_regular_user_cannot_see_the_file_admin_index()
    {
        $this->signIn();

        $this->get('/admin/file')
             ->assertStatus(403);

        $this->expectException('Illuminate\Auth\Access\AuthorizationException');
        $this->withoutExceptionHandling()
             ->get('/admin/file');
    }

    /** @test */
    function a_webmaster_cannot_see_the_file_admin_index()
    {
        $this->signIn($this->webmaster);

        $this->get('/admin/file')
             ->assertStatus(403);

        $this->expectException('Illuminate\Auth\Access\AuthorizationException');
        $this->withoutExceptionHandling()
             ->get('/admin/file');
    }

    /** @test */
    function a_super_admin_can_see_the_file_admin_index()
    {
        $this->signIn($this->super);

        $this->get('/admin/file')
             ->assertStatus(200);
    }

    /** @test */
    function a_guest_cannot_see_the_file_create_page()
    {
        $this->get('/admin/file/create')
             ->assertRedirect(route('login'));

        $this->expectException('Illuminate\Auth\AuthenticationException');
        $this->withoutExceptionHandling()
             ->get('/admin/file/create');
    }

    /** @test */
    function a_regular_user_cannot_see_the_file_create_page()
    {
        $this->signIn();

        $this->get('/admin/file/create')
             ->assertStatus(403);

        $this->expectException('Illuminate\Auth\Access\AuthorizationException');
        $this->withoutExceptionHandling()
             ->get('/admin/file/create');
    }

    /** @test */
    function a_webmaster_cannot_see_the_file_create_page()
    {
        $this->signIn($this->webmaster);

        $this->get('/admin/file/create')
             ->assertStatus(403);

        $this->expectException('Illuminate\Auth\Access\AuthorizationException');
        $this->withoutExceptionHandling()
             ->get('/admin/file/create');
    }

    /** @test */
    function a_super_admin_can_see_the_file_create_page()
    {
        $this->signIn($this->super);

        $this->get('/admin/file/create')
             ->assertStatus(200);
    }


}
