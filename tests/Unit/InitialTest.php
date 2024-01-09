<?php

declare(strict_types=1);

namespace Tests\Unit;

use Boilerplate\Classes\Initial;
use PHPUnit\Framework\TestCase;

final class InitialTest extends TestCase
{
    public function testInitialCanBeInstantiated(): void
    {
        $initial = new Initial([]);

        $this->assertInstanceOf(Initial::class, $initial);
    }
}



