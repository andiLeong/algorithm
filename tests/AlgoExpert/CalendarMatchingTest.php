<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\CalendarMatching;
use PHPUnit\Framework\TestCase;

class CalendarMatchingTest extends TestCase
{

    /**
     * Imagine that you want to schedule a meeting of a certain duration with a
     * co-worker. You have access to your calendar and your co-worker's calendar
     * (both of which contain your respective meetings for the day, in the form of
     * [startTime, endTime]), as well as both of your daily bounds
     * (i.e., the earliest and latest times at which you're available for meetings
     * every day, in the form of [earliestTime, latestTime]).
     *
     * Write a function that takes in your calendar, your daily bounds, your
     * co-worker's calendar, your co-worker's daily bounds, and the duration of the
     * meeting that you want to schedule, and that returns a list of all the time
     * blocks (in the form of [startTime, endTime]) during which you
     * could schedule the meeting, ordered from earliest time block to latest.
     *
     * Note that times will be given and should be returned in military time. For
     * example: 8:30, 9:01, and 23:56.
     *
     * Also note that the given calendar times will be sorted by start time in
     * ascending order, as you would expect them to appear in a calendar application
     * like Google Calendar.
     *
     * Sample Input
     * calendar1 = [['9:00', '10:30'], ['12:00', '13:00'], ['16:00', '18:00']]
     * dailyBounds1 = ['9:00', '20:00']
     * calendar2 = [['10:00', '11:30'], ['12:30', '14:30'], ['14:30', '15:00'], ['16:00', '17:00']]
     * dailyBounds2 = ['10:00', '18:30']
     * meetingDuration = 30
     *
     * Sample Output
     * [['11:30', '12:00'], ['15:00', '16:00'], ['18:00', '18:30']]
     * https://www.algoexpert.io/questions/calendar-matching
     *
     * @dataProvider provider
     * @test
     */
    public function calendar_matching_test($schedule, $bound, $schedule2, $bound2, $duration, $expected)
    {
        $this->assertSame($expected, CalendarMatching::find($schedule, $bound, $schedule2, $bound2, $duration));
    }

    public static function provider()
    {
        return [
            [
                [
                    ["9:30", "10:30"],
                    ["12:00", "13:00"],
                    ["16:00", "18:00"]
                ],
                ["9:00", "20:00"],
                [
                    ["10:00", "11:30"],
                    ["12:30", "14:30"],
                    ["14:30", "15:00"],
                    ["16:00", "17:00"]
                ],
                ["10:00", "18:30"],
                30,
                [
                    ["11:30", "12:00"],
                    ["15:00", "16:00"],
                    ["18:00", "18:30"]
                ]
            ],
            [
                [
                    ["9:00", "10:30"],
                    ["12:00", "13:00"],
                    ["16:00", "18:00"]
                ],
                ["9:00", "20:00"],
                [
                    ["10:00", "11:30"],
                    ["12:30", "14:30"],
                    ["14:30", "15:00"],
                    ["16:00", "17:00"]
                ],
                ["10:00", "18:30"],
                30,
                [
                    ["11:30", "12:00"],
                    ["15:00", "16:00"],
                    ["18:00", "18:30"]
                ]
            ],
            [
                [
                    ["9:00", "10:30"],
                    ["12:00", "13:00"],
                    ["16:00", "18:00"]
                ],
                ["9:00", "20:00"],
                [
                    ["10:00", "11:30"],
                    ["12:30", "14:30"],
                    ["14:30", "15:00"],
                    ["16:00", "17:00"]
                ],
                ["10:00", "18:30"],
                45,
                [
                    ["15:00", "16:00"]
                ]
            ],
            [
                [
                    ["9:00", "10:30"],
                    ["12:00", "13:00"],
                    ["16:00", "18:00"]
                ],
                ["8:00", "20:00"],
                [
                    ["10:00", "11:30"],
                    ["12:30", "14:30"],
                    ["14:30", "15:00"],
                    ["16:00", "17:00"]
                ],
                ["7:00", "18:30"],
                45,
                [
                    ["8:00", "9:00"],
                    ["15:00", "16:00"]
                ]
            ],
            [
                [
                    ["8:00", "10:30"],
                    ["11:30", "13:00"],
                    ["14:00", "16:00"],
                    ["16:00", "18:00"]
                ],
                ["8:00", "18:00"],
                [
                    ["10:00", "11:30"],
                    ["12:30", "14:30"],
                    ["14:30", "15:00"],
                    ["16:00", "17:00"]
                ],
                ["7:00", "18:30"],
                15,
                []
            ],
            [
                [
                    ["10:00", "10:30"],
                    ["10:45", "11:15"],
                    ["11:30", "13:00"],
                    ["14:15", "16:00"],
                    ["16:00", "18:00"]
                ],
                ["9:30", "20:00"],
                [
                    ["10:00", "11:00"],
                    ["12:30", "13:30"],
                    ["14:30", "15:00"],
                    ["16:00", "17:00"]
                ],
                ["9:00", "18:30"],
                15,
                [
                    ["9:30", "10:00"],
                    ["11:15", "11:30"],
                    ["13:30", "14:15"],
                    ["18:00", "18:30"]
                ]
            ],
            [
                [
                    ["10:00", "10:30"],
                    ["10:45", "11:15"],
                    ["11:30", "13:00"],
                    ["14:15", "16:00"],
                    ["16:00", "18:00"]
                ],
                ["9:30", "20:00"],
                [
                    ["10:00", "11:00"],
                    ["10:30", "20:30"]
                ],
                ["9:00", "22:30"],
                60,
                []
            ],
            [
                [
                    ["10:00", "10:30"],
                    ["10:45", "11:15"],
                    ["11:30", "13:00"],
                    ["14:15", "16:00"],
                    ["16:00", "18:00"]
                ],
                ["9:30", "20:00"],
                [
                    ["10:00", "11:00"],
                    ["10:30", "16:30"]
                ],
                ["9:00", "22:30"],
                60,
                [
                    ["18:00", "20:00"]
                ]
            ],
            [
                [],
                ["9:30", "20:00"],
                [],
                ["9:00", "16:30"],
                60,
                [
                    ["9:30", "16:30"]
                ]
            ],
            [
                [],
                ["9:00", "16:30"],
                [],
                ["9:30", "20:00"],
                60,
                [
                    ["9:30", "16:30"]
                ]
            ],
            [
                [],
                ["9:30", "16:30"],
                [],
                ["9:30", "16:30"],
                60,
                [
                    ["9:30", "16:30"]
                ]
            ],
            [
                [
                    ["7:00", "7:45"],
                    ["8:15", "8:30"],
                    ["9:00", "10:30"],
                    ["12:00", "14:00"],
                    ["14:00", "15:00"],
                    ["15:15", "15:30"],
                    ["16:30", "18:30"],
                    ["20:00", "21:00"]
                ],
                ["6:30", "22:00"],
                [
                    ["9:00", "10:00"],
                    ["11:15", "11:30"],
                    ["11:45", "17:00"],
                    ["17:30", "19:00"],
                    ["20:00", "22:15"]
                ],
                ["8:00", "22:30"],
                30,
                [
                    ["8:30", "9:00"],
                    ["10:30", "11:15"],
                    ["19:00", "20:00"]
                ]
            ],
        ];
    }
}
