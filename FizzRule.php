<?php

require_once('Rule.php');

class FizzRule extends Rule
{
    protected $msg = "Fizz";

    protected function check(int $int): bool
    {
        return $int %3 === 0;
    }

    public function result(int $int): string
    {
        if ($this->check($int)) {
            return $this->msg;
        }

        if (false === is_null($this->next)) {
            return $this->next->result($int);
        }

        return "{$int}";
    }
}