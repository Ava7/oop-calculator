<?php

namespace App\Logger;

class ConsoleLogger implements LoggerInterface
{
    public function log($message)
    {
        echo "ERROR: $message!\n";
    }
}
