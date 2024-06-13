<?php

namespace Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testHello()
    {
        $client = static::createClient();
        // $crawler = $client->request('GET', '/hello/Bob');

        // $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // $this->assertResponseIsSuccessful();

        // $this->assertSelectorTextContains('h1', 'Hello, Bob!!');
    }

    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // $this->assertResponseIsSuccessful();

        $this->assertSelectorTextContains('ul', 'Panpan');
    }
}
