<?php

declare(strict_types = 1);

namespace App\Tests\Unit;

use App\FizzBuzz\FizzBuzz;
use App\Tests\Traits\FizzBuzzTestTrait;
use PHPUnit\Framework\TestCase;

class FizzBuzzIteratorTest extends TestCase
{
    use FizzBuzzTestTrait;

    public function testIterator(): void
    {
        $fizzBuzzIterator = new FizzBuzz();
        $result = $fizzBuzzIterator->iterate();

        $this->assertFizzBuzz($result);
    }
}
