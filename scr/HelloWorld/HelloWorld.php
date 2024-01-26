<?php

namespace App\HelloWorld;

class HelloWorld
{
    /**
     * @var $name string
     */
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function hello(): string
    {
        return "Hello " . $this->name;
    }
}
