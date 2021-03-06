<?php

abstract class ATerm
{

    public $name;
    public $childrenLeft;
    public $childrenRight;
    public $parent;
    public $lec;
    public $const;
    public $var;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract function calc();
}