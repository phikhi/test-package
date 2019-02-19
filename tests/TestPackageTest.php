<?php

namespace Phikhi\TestPackage\Tests;

use Phikhi\TestPackage\TestPackage;
use PHPUnit\Framework\TestCase;

class TestPackageTest extends TestCase
{
    /** @test */
    public function it_returns_a_test_package_instance()
    {
        $package = new TestPackage();
        $this->assertSame('hello', $package->hello());
    }
}
