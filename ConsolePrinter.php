<?php

require_once("PrinterInterface.php");

class ConsolePrinter implements PrinterInterface
{
    public function print(string $string): void
    {
        echo $string . PHP_EOL;
    }
}
