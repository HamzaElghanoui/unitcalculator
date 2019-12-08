<?php
namespace drmonkeyninja\Calculator;

use drmonkeyninja\Calculator\Exeptions\NoOperandExeptioons;

class Division extends OperationsAbstract implements OperationsInterface{

    public function calculate() {
        if(count($this->operands) === 0){
            throw new NoOperandExeptioons();
        }
        // $result  = 0;
        // foreach ($this->operands as $key => $operand) {
        //     if($key == 0){
        //         $result = $operand;
        //         continue;
        //     }
        //     $result = $result / $operand;
        //     return $result;
        // }
        return array_reduce(array_filter($this->operands), function($a, $b){
            if($a !== null && $b !== null){
                return $a / $b;
            }
            return $b;
        },null);
    }
}