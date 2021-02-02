<?php

class Student
{
    public $lastname;
    public $class;

    public function __construct( $lastname = "", $class = "" )
    {
        $this->lastname = $lastname;
        $this->class = $class;
    }

    public function __destruct()
    {
        
    }
}