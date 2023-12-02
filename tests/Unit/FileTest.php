<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Support\Facades\Storage;

use App\File;

class FileTest extends TestCase
{

    /** @test */
    public function it_can_get_its_mime_type()
    {
        Storage::fake();
        Storage::disk()->put('test.txt', 'NOTHING');
        $file = File::factory()->create(['storage_path' => 'test.txt']);
        $file->getMimeAttribute();
        $this->assertEquals($file->mime, 'text/plain');
    }
}
