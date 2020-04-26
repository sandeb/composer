<?php
namespace App\Wcs;

class Hello
{
    public $hello;

    public function talk()
    {
        $this->hello = "hello";
        return "Hello world !";
    }
}