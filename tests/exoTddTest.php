<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExoTddTest extends TestCase
{
    public function testDecimalToRoman(): void
    {
        $this->assertEquals("", ExoTDD::decimalToRoman(0));   
    }
    
}