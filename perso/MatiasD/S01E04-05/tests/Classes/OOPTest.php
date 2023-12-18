<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use PW\Class\A;
use PW\Class\B;

final class OOPTest extends TestCase
{
    public function testBExtendsA(): void
    {
        $b = new B();
        $this->assertInstanceOf(A::class, $b);
    }
}