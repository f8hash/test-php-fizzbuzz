<?php

require_once('ConsolePrinter.php');

$printer = new ConsolePrinter();

$input_n = 30;

for ($i = 1; $i <= $input_n; $i++) {
    if ($i % 15 === 0) {
        $printer->print('FizzBuzz');
    } elseif ($i % 5 === 0) {
        $printer->print('Buzz');
    } elseif ($i % 3 === 0) {
        $printer->print('Fizz');
    } else {
        $printer->print("{$i}");
    }
}
