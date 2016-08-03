<?php

namespace App;

require_once 'vendor/autoload.php';

$program = new Program(new Calculator(), new Logger\ConsoleLogger());
$result = $program->run(new Operation\Addition(), [10, 2]);

var_dump($result);
