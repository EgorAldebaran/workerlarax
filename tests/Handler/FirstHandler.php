<?php

namespace Tests\Handler;

/// создаем конкретные обработчики
class FirstHandler implements Handler
{
    public function handleRequest($request)
    {
        echo "First handler is handling the request: " . $request . "\n";
    }
}
