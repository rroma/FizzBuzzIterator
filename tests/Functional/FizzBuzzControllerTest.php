<?php

declare(strict_types = 1);

namespace App\Tests\Functional;

use App\Tests\Traits\FizzBuzzTestTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FizzBuzzControllerTest extends WebTestCase
{
    use FizzBuzzTestTrait;

    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $html = $crawler->filter('body > p')->html();
        $this->assertFizzBuzz(explode('<br>', trim($html)));
    }
}
