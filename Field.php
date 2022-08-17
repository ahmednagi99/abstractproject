<?php

abstract class Field
{
    public function __construct(protected $name)
    {

    }
    public abstract function render():string;
}
