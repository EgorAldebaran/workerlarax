<?php

namespace Tests\Handler;

/// создаем конкретные обработчики
class SecondHandler implements Handler
{
    public function handleRequest($request)
    {
        echo "Second handler is handling the request: " . $request . "\n";
    }
}
