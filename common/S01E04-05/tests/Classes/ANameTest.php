<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use PW\Class\A;

final class ANameTest extends TestCase
{
    public function testAName(): void
    {
        $a = new A();
        $this->assertSame($a->__toString(), 'a');
    }
}