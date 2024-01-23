<?php

namespace App\HelloWorld;

class HelloWorld
{
    /**
     * @var $name string
     */
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello(): string
    {
         echo "Hello " . $this->name;
        return true;
    }
}
