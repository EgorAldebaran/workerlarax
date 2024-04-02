<?php

namespace Tests\Handler;

/// создаем диспетчер для направления запросо обработчикам
class Dispatcher
{
    private $handler = [];

    public function addHandler($criteria, Handler $handler)
    {
        $this->handlers[$criteria] = $handler;
    }

    public function dispatch($criteria, $request)
    {
        if (isset($this->handlers[$criteria])) {
            $this->handlers[$criteria]->handleRequest($request);
        }
        else {
            echo "No handler found for criteria: ". $criteria . "\n";
        }
    }
}
