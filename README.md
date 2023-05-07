# FizzBuzzIterator project

## Description

FizzBuzzIterator is a simple web application that iterates through all numbers from 1 to 100. If the number is divisible by 3 it prints out Fizz instead of the number, if the number is divisible by 5 it prints out Buzz, if the number is divisible by 3 and 5 the output is FizzBuzz.

## Requirements
- PHP 7.2.5 or higher, ctype, iconv extensions
- Composer 2.0 or higher https://getcomposer.org/download/

## Installation
1. Clone the repository `git clone https://github.com/rroma/FizzBuzzIterator.git`
2. Go to the project directory `cd FizzBuzzIterator`
3. Install dependencies with `composer install`
4. Run the application with `php -S localhost:8000 -t public`
5. Open the application in your browser at `http://localhost:8000`

## Run tests
1. Run tests with `php bin/phpunit tests`
