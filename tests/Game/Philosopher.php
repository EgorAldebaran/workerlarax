<?php

namespace Tests\Game;

class Philosopher
{
    private $message;

    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        $message = sprintf("%s\n(сообщение переданное от %s)\n ", $this->message, $this->name);
        return $message;
    }
}
