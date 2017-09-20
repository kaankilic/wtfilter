<?php namespace Kaankilic\WTFilter\Tests;

use Kaankilic\WTFilter\Facades\WTFilter;

/**
 * Class BaseTests
 *
 * @package Tests
 */
class BaseTests extends TestCase{

    /**
     * Test basic ping functionality with trying to send ping to google
     *
     * @test
     */
    public function testSimpleCase()
    {
    	$badWords = "test case is cunt simple";
    	$hasProfanity = WTFilter::filter($badWords);
    	dd($hasProfanity);
//        $ping = ServerUp::ping('http://google.com',80);
//        $this->assertTrue(ServerUp::getIsTotalyAvail());
    }

}