<?php

namespace Tests\Unit;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class MarkdownTest extends TestCase
{
    #[Test]
    public function it_returns_an_empty_string_for_null_input()
    {
        $this->assertSame('', markdown(null));
    }

    #[Test]
    public function block_mode_wraps_output_in_paragraph_tags()
    {
        $result = markdown('hello');
        $this->assertStringContainsString('<p>hello</p>', $result);
    }

    #[Test]
    public function inline_mode_strips_the_wrapping_paragraph_tags()
    {
        $result = markdown('hello', false);
        $this->assertStringNotContainsString('<p>', $result);
        $this->assertStringContainsString('hello', $result);
    }

    #[Test]
    public function it_renders_bold_and_italic()
    {
        $result = markdown('**bold** and *italic*');
        $this->assertStringContainsString('<strong>bold</strong>', $result);
        $this->assertStringContainsString('<em>italic</em>', $result);
    }

    #[Test]
    public function it_strips_raw_html_from_input()
    {
        $result = markdown('<b>sneaky</b> text');
        $this->assertStringNotContainsString('<b>', $result);
        $this->assertStringContainsString('sneaky', $result);
    }

    #[Test]
    public function it_strips_script_tags()
    {
        $result = markdown('<script>alert("xss")</script>');
        $this->assertStringNotContainsString('<script>', $result);
        $this->assertStringNotContainsString('alert', $result);
    }

    #[Test]
    public function it_blocks_javascript_urls()
    {
        $result = markdown('[click me](javascript:alert(1))');
        $this->assertStringNotContainsString('javascript:', $result);
    }
}
