<?php

namespace Tests\Unit;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Support\Facades\Storage;
use App\File;

class FileTest extends TestCase
{
    #[Test]
    public function it_can_get_its_mime_type()
    {
        Storage::fake();
        Storage::disk()->put('test.txt', 'NOTHING');
        $file = File::factory()->create(['storage_path' => 'test.txt']);
        $file->getMimeAttribute();
        $this->assertEquals($file->mime, 'text/plain');
    }

    #[Test]
    public function it_sanitises_filenames_to_lowercase_kebab()
    {
        $file = File::factory()->create(['name' => 'My Document File.pdf']);
        $this->assertEquals('my-document-file.pdf', $file->name);
    }

    #[Test]
    public function it_transliterates_utf8_characters()
    {
        $file = File::factory()->create(['name' => 'Ünïcödé.jpg']);
        $this->assertMatchesRegularExpression('/^[a-z0-9\-\.]+$/', $file->name);
    }

    #[Test]
    public function it_collapses_multiple_separators()
    {
        $file = File::factory()->create(['name' => 'my--double  spaced.pdf']);
        $this->assertStringNotContainsString('--', $file->name);
        $this->assertStringNotContainsString('  ', $file->name);
    }

    #[Test]
    public function it_does_not_produce_a_dash_before_the_extension()
    {
        $file = File::factory()->create(['name' => 'trailing space .pdf']);
        $this->assertStringNotContainsString('-.', $file->name);
    }
}
