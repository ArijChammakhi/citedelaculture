<?php

namespace PIDEVBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WorkshopControllerTest extends WebTestCase
{
    public function testAjoutworkshop()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajoutWorkshop');
    }

    public function testUpdateworkshop()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateWorkshop');
    }

    public function testSupprimerworkshop()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supprimerWorkshop');
    }

    public function testAfficherworkshop()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AfficherWorkshop');
    }

}
