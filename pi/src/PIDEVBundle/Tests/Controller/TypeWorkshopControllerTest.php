<?php

namespace PIDEVBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TypeWorkshopControllerTest extends WebTestCase
{
    public function testAjouttypework()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajoutt');
    }

    public function testSupprimertypework()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/suppt');
    }

    public function testAffichetypework()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/affichet');
    }

}
