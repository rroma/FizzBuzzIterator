<?php

declare(strict_types = 1);

namespace App\Tests\Traits;

trait FizzBuzzTestTrait
{
    protected function assertFizzBuzz(array $fizzBuzz): void
    {
        $expectedCount = 100;
        $this->assertCount($expectedCount, $fizzBuzz, 'Invalid rows count in FizzBuzz result');
        for ($i = 1; $i <= $expectedCount; $i++) {
            $expectedResult = $i;
            if ($i % 3 === 0 && $i % 5 === 0) {
                $expectedResult = 'FizzBuzz';
            } elseif ($i % 3 === 0) {
                $expectedResult = 'Fizz';
            } elseif ($i % 5 === 0) {
                $expectedResult = 'Buzz';
            }

            $this->assertEquals($expectedResult, $fizzBuzz[$i - 1], 'Invalid FizzBuzz result for number ' . $i);
        }
    }
}
