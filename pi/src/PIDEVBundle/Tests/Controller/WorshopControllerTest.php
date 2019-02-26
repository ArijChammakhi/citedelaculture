<?php

namespace PIDEVBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WorshopControllerTest extends WebTestCase
{
    public function testAjouterw()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Ajouterw');
    }

}
