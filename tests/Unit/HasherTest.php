<?php

namespace Tests\Unit;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use App\Utilities\Hasher;

class HasherTest extends TestCase
{
    #[Test]
    public function it_can_hash_and_unhash_an_integer()
    {
        $id = 1;
        $hashid = Hasher::encode($id);
        $this->assertIsString($hashid);
        $this->assertIsInt(Hasher::decode($hashid));
        $this->assertEquals(Hasher::decode($hashid), $id);
    }
}
