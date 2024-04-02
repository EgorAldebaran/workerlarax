<?php

namespace Tests\Dispatcher;

/**
 * Простая вспомогательная функция для предоставления глобального доступа к
 * диспетчеру событий.
 */
class Event
{
    public static function events(): EventDispatcher
    {
        static $eventDispatcher;
        if (!$eventDispatcher) {
            $eventDispatcher = new EventDispatcher();
        }

        return $eventDispatcher;
    }
}
