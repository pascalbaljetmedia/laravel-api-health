<?php

namespace ProtoneMedia\ApiHealth\Tests\TestCheckers;

use Pbmedia\ApiHealth\Checkers\AbstractChecker;
use Pbmedia\ApiHealth\Checkers\CheckerHasFailed;

class FailOnceChecker extends AbstractChecker
{
    public function run()
    {
        static $number;

        if (is_null($number)) {
            $number = 0;
        }

        if ($number == 0) {
            $number++;
            throw new CheckerHasFailed("TestChecker fails!");
        }

        $number++;
    }

    public function isDue(): bool
    {
        return true;
    }

    public static function create()
    {
        return new static;
    }
};
