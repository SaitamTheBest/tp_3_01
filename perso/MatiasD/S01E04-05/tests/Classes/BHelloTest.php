<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use PW\Class\B;

final class BHelloTest extends TestCase
{
    public function testBHello(): void
    {
        $b = new B();
        $this->assertSame($b->hello(), "Hello B ");
    }
}