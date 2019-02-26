<?php

namespace PIDEVBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SessionControllerTest extends WebTestCase
{
    public function testAjoutersession()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajoutS');
    }

}
