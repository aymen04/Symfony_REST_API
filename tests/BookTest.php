<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Book;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class BookTest extends ApiTestCase
{
    

    public function testSomething(): void
    {
        // "client" that is acting as the browser
        $client = static::createClient();

        // Request a specific page
        $crawler = $client->request('GET', '/api/books');

        // Validate a successful response
        $this->assertResponseIsSuccessful();
    }
}
