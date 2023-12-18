<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use PW\Class\A;

final class AHelloTest extends TestCase
{
    public function testAHello(): void
    {
        $a = new A();
        $this->assertSame($a->hello(), "Hello A ");
    }
}