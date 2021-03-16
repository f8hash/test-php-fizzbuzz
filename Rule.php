<?php

require_once('RuleInterface.php');

abstract class Rule implements RuleInterface
{
    protected $msg = "";
    protected $next;

    public function setNext(Rule $rule): self
    {
        $this->next = $rule;
        return $this;
    }

    abstract public function result(int $int): string;
    abstract protected function check(int $int): bool;
}
