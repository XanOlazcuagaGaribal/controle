<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class exoTddTest extends TestCase
{
    public function testDecimalToRoman(): void
    {
        $this->assertEquals("", ExoTDD::decimalToRoman(0));
        $this->assertEquals("I",ExoTDD::decimalToRoman(1));
    }
    
}