<?php

interface RuleInterface
{
    public function setNext(Rule $rule): Rule;
    public function result(int $int): string;
}
