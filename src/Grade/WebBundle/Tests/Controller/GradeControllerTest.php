<?php

namespace Grade\WebBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GradeControllerTest extends WebTestCase
{
    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Grade/view');

        $this->assertTrue($crawler->filter('html:contains("Test value :)")')->count() > 0);
    }

}
