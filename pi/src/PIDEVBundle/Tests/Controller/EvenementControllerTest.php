<?php

namespace PIDEVBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EvenementControllerTest extends WebTestCase
{
    public function testAjoutevenement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ajoutE');
    }

    public function testModifierevenement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'modifE');
    }

    public function testSupprimerevenement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'suppE');
    }

}
