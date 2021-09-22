<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class exoTddTest extends TestCase
{
    public function testDecimalToRoman(): void
    {
        $this->assertEquals("", ExoTDD::decimalToRoman(0));
        $this->assertEquals("I",ExoTDD::decimalToRoman(1));
        $this->assertEquals("II",ExoTDD::decimalToRoman(2));
        $this->assertEquals("III",ExoTDD::decimalToRoman(3));
        $this->assertEquals("X",ExoTDD::decimalToRoman(10));
        $this->assertEquals("XX",ExoTDD::decimalToRoman(20));
        $this->assertEquals("XXI",ExoTDD::decimalToRoman(21));
    }
    
}