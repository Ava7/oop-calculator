<?php

namespace App\Operation;

class Addition implements OperationInterface
{
    public function calculate(array $operands)
    {
        return array_sum($operands);
    }
}
