<?php

namespace App\Constants;

class StatusMatch
{
    const NOT_STARTED = 1;
    const FIRST_HALF = 2;
    const HALFTIME = 3;
    const SECOND_HALF = 4;
    const OVERTIME = 5;
    const OVERTIME_DEPRECATED = 6;
    const PENALTIES = 7;
    const FINISHED = 8;
    const POSTPONED = 9;

    const STATUS = [
        self::NOT_STARTED => 'Not started',
        self::FIRST_HALF => 'First half',
        self::HALFTIME => 'Halftime',
        self::SECOND_HALF => 'Second half',
        self::OVERTIME => 'Overtime',
        self::OVERTIME_DEPRECATED => 'Overtime deprecated',
        self::PENALTIES => 'Penalties',
        self::FINISHED => 'Finished',
        self::POSTPONED => 'Postponed'
    ];

    const STATUS_LIVE = [
        self::FIRST_HALF,
        self::HALFTIME,
        self::SECOND_HALF,
        self::OVERTIME,
        self::OVERTIME_DEPRECATED,
        self::PENALTIES,
    ];
}
