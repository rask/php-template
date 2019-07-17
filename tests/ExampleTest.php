<?php declare(strict_types = 1);

namespace Vendor\Package\Tests;

use PHPUnit\Framework\TestCase;
use Vendor\Package\Example;

/**
 * Class ExampleTest
 */
class ExampleTest extends TestCase
{
    public function test_it_works() : void
    {
        $example = new Example();

        $this->assertInstanceOf(Example::class, $example);
    }
}
