<?php

namespace Tests\Handler;

// создаем интерфейс обработчика
interface Handler
{
    public function handleRequest($request);
}
