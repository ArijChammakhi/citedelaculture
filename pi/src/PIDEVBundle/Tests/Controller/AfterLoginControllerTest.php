<?php

namespace PIDEVBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AfterLoginControllerTest extends WebTestCase
{
    public function testAfterlogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AfterLogin');
    }

}
