<?php declare(strict_types = 1);

namespace Vendor\Package\Tests;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use Vendor\Package\Example;

class ExampleTest extends TestCase
{
    public function test_it_works() : void
    {
        $example = new Example();

        Assert::assertInstanceOf(Example::class, $example);

        $example->helloWorld(1);
    }
}
