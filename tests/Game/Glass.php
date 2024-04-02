<?php

namespace Tests\Game;

class Glass
{
    private $message = [];

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
