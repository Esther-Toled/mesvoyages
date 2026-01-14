<?php

namespace App\Tests;

use App\Entity\Visite;
use PHPUnit\Framework\TestCase;

/**
 * Description of VisiteTest
 *
 * @author toled
 */
class VisiteTest extends TestCase {
    //put your code here
    public function testGetDatecreationstring(){
        $visite =new Visite();
        $visite->setDatecreation(new \DateTime("2024-04-24"));
        $this->assertEquals("24/04/2024", $visite->getDatecreationString());
    }
}
