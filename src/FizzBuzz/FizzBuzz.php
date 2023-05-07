<?php

declare(strict_types = 1);

namespace App\FizzBuzz;

class FizzBuzz implements FizzBuzzInterface
{
    public const FIZZ = 'Fizz';
    public const BUZZ = 'Buzz';

    public const FIZZ_DIVISOR = 3;
    public const BUZZ_DIVISOR = 5;

    public const ITERATIONS = 100;

    public function iterate(): array
    {
        $result = [];
        for ($i = 1; $i <= self::ITERATIONS; $i++) {
            if ($i % self::FIZZ_DIVISOR === 0 && $i % self::BUZZ_DIVISOR === 0) {
                $result[] = self::FIZZ . self::BUZZ;
                continue;
            }
            if ($i % self::FIZZ_DIVISOR === 0) {
                $result[] = self::FIZZ;
                continue;
            }
            if ($i % self::BUZZ_DIVISOR === 0) {
                $result[] = self::BUZZ;
                continue;
            }

            $result[] = $i;
        }

        return $result;
    }
}
