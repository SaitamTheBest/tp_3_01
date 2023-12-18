<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use PW\Class\B;

final class BNameTest extends TestCase
{
    public function testBName(): void
    {
        $b = new B();
        $this->assertSame($b->__toString(), 'b');
    }
}