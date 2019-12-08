<?php

namespace drmonkeyninja\Calculator;

abstract class OperationsAbstract{
    protected $operands = [];
    
    public function setOperands($operands) {
        $this->operands = $operands;
    }
}

?>