<?php

namespace OrBitAPI\VSOP\Tests\Unit\Planets;

use OrBitAPI\VSOP\Planets\Earth;
use OrBitAPI\VSOP\Planets\Planet;
use PHPUnit\Framework\TestCase;

class EarthTest extends TestCase
{
    public function testEarthIsPlanet(): void
    {
        $this->assertInstanceOf(Planet::class, new Earth());
    }
}