<?php
namespace drmonkeyninja\Calculator;

use drmonkeyninja\Calculator\Exeptions\NoOperandExeptioons;

class Adition extends OperationsAbstract implements OperationsInterface{

    public function calculate() {
        // $result = 0;
        // foreach ($this->operands as $key => $operand) {
        //     $result+= $operand;
        // }
        // return $result;
        if(count($this->operands) === 0){
            throw new NoOperandExeptioons();
        }
        return array_sum($this->operands);
    }
}