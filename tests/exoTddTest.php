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
        $this->assertEquals("IV",ExoTDD::decimalToRoman(4));
        $this->assertEquals("X",ExoTDD::decimalToRoman(10));
        $this->assertEquals("XX",ExoTDD::decimalToRoman(20));
        $this->assertEquals("XXI",ExoTDD::decimalToRoman(21));
        $this->assertEquals("XXV",ExoTDD::decimalToRoman(25));
        $this->assertEquals("MMM",ExoTDD::decimalToRoman(3000));
    }

    public function testRomanToDecimal(): void 
    {
        $this->assertEquals(1, ExoTDD::romanToDecimal("I"));
        $this->assertEquals(5, ExoTDD::romanToDecimal("V"));
        $this->assertEquals(10, ExoTDD::romanToDecimal("X"));
        $this->assertEquals(50, ExoTDD::romanToDecimal("L"));
        $this->assertEquals(100, ExoTDD::romanToDecimal("C"));
        $this->assertEquals(500, ExoTDD::romanToDecimal("D"));
        $this->assertEquals(1000, ExoTDD::romanToDecimal("M"));
    }
    
}