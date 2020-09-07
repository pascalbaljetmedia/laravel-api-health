<?php

namespace ProtoneMedia\ApiHealth\Tests\TestCheckers;

use Illuminate\Console\Scheduling\Event;
use ProtoneMedia\ApiHealth\Checkers\AbstractChecker;

class EveryFiveMinutesChecker extends AbstractChecker
{
    public function run()
    {
        return;
    }

    public static function create()
    {
        return new static;
    }

    public function schedule(Event $event)
    {
        $event->everyFiveMinutes();
    }
};
