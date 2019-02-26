<?php

namespace PIDEVBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Workshop1ControllerTest extends WebTestCase
{
    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Supprimer');
    }

}
