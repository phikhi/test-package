<?php

namespace Phikhi\TestPackage\Tests;

use PHPUnit\Framework\TestCase;
use Phikhi\TestPackage\TestPackage;

class TestPackageTest extends TestCase
{
    /** @test */
    public function it_returns_a_test_package_instance()
    {
        $package = new TestPackage();
        $this->assertSame('hello', $package->hello());
    }
}
