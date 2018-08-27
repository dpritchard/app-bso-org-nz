<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use App\File;

class FilePostTest extends TestCase
{
    /** @test */
    function a_guest_cannot_upload_files()
    {
      $this->post('/admin/file')
           ->assertRedirect(route('login'));
    }

    /** @test */
    function a_regular_user_cannot_upload_files()
    {
      $this->signIn();

      $this->post('/admin/file')
           ->assertStatus(403);
    }

    /** @test */
    function a_treasurer_cannot_upload_files()
    {
      $this->signIn($this->treasurer);

      $this->post('/admin/file')
           ->assertStatus(403);
    }

    /** @test */
    function a_webmaster_can_upload_files()
    {
      $this->signIn($this->webmaster);

      Storage::fake();

      $this->json('POST', '/admin/file', [
          'file' => $file = UploadedFile::fake()->create('test.file')
      ]);

      $this->assertDatabaseHas('files', [
          'storage_path' => 'files/' . $file->hashName()
      ]);

      Storage::disk()->assertExists('files/' . $file->hashName());
    }

    /** @test */
    function a_webmaster_can_upload_a_private_file()
    {
      $this->signIn($this->webmaster);

      Storage::fake();

      $this->json('POST', '/admin/file', [
          'file' => $file = UploadedFile::fake()->create('test.file'),
          'visibility' => 'private'
      ]);

      $this->assertDatabaseHas('files', [
          'storage_path' => 'files/' . $file->hashName(),
          'visibility' => 'private'
      ]);

      Storage::disk()->assertExists('files/' . $file->hashName());
    }

    /** @test */
    function it_does_not_allow_submission_of_invalid_input()
    {
      $this->signIn($this->webmaster);

      $this->post('/admin/file')
           ->assertSessionHasErrors();

      $this->json('post', '/admin/file')
           ->assertStatus(422);
    }
}
