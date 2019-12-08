<?php

use drmonkeyninja\Calculator\Adition;
use drmonkeyninja\Calculator\Division;
use drmonkeyninja\Calculator\Exeptions\NoOperandExeptioons;
use PHPUnit\Framework\TestCase;
class DivisionTest extends TestCase{

    public function testGivenOperands(){
        $div = new Division();
        $div->setOperands([20, 10, 2]);
        $this->assertEquals($div->calculate(),1);
    }

    public function testGivenOperandsWithZero(){
        $div = new Division();
        $div->setOperands([20, 0, 2]);
        $this->assertEquals($div->calculate(),10);
    }

    public function testNoGivenOperandsGiven(){
        $this->expectException(NoOperandExeptioons::class);
        $div = new Division();
        $div->calculate();
    }
}

?>