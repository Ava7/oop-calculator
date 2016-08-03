<?php

namespace App;

use App\Logger\LoggerInterface;
use \Exception;

class Program
{
    protected $calculator;
    protected $logger;

    public function __construct(Calculator $calculator, LoggerInterface $logger)
    {
        $this->calculator = $calculator;
        $this->logger = $logger;
    }

    public function run($operation, $operands)
    {
        try {
            $this->calculator->setOperands($operands);
        } catch (Exception $e) {
            $this->logger->log($e->getMessage());
        }

        return $this->calculator->calculate($operation);
    }
}
