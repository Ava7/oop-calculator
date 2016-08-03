<?php

namespace App;

use App\Operation\OperationInterface;
use \Exception;

class Calculator
{
    protected $operands = array();

    public function setOperands(array $operands)
    {
        if (count($operands) < 2) {
            throw new Exception('Expected 2 or more operands');
        }

        $this->operands = $operands;
    }

    public function calculate(OperationInterface $operation)
    {
        return $operation->calculate($this->operands);
    }
}
