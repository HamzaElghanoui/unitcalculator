<?php

use drmonkeyninja\Calculator\Adition;
use drmonkeyninja\Calculator\Exeptions\NoOperandExeptioons;
use PHPUnit\Framework\TestCase;
class AditionTest extends TestCase{

    public function testGivenOperands(){
        $adition = new Adition();
        $adition->setOperands([5, 10, 4]);
        $this->assertEquals($adition->calculate(), 19);
    }

    public function testNoGivenOperandsGiven(){
        $this->expectException(NoOperandExeptioons::class);
        $adition = new Adition();
        $adition->calculate();
    }
}

?>