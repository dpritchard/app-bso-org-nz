<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Utilities\Hasher;

class HasherTest extends TestCase
{

    /** @test */
    function it_can_hash_and_unhash_an_integer()
    {
        $id = 1;
        $hashid = Hasher::encode($id);
        $this->assertInternalType('string', $hashid);
        $this->assertInternalType('integer', Hasher::decode($hashid));
        $this->assertEquals(Hasher::decode($hashid), $id);
    }
}
