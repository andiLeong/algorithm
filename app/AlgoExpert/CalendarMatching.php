<?php

namespace App\AlgoExpert;

class CalendarMatching
{
    public static function find($schedule, $bound, $schedule2, $bound2, $duration)
    {
        // 1 append start and end time to both schedule
        // 2 sort the 2 schedule array
        // 3 find each booked schedule array interval and merge
        // 4 the left array merged array are the booked schedule of two schedules,
        // so we find the timeslot that does not appear in this array
        self::appendStartEndTime($schedule, $bound, $schedule2, $bound2);
        $bookedSchedules = self::getBookedSchedule($schedule, $schedule2);
        $mergedBookedSchedule = self::mergeBookedSchedule($bookedSchedules);

        $availableSchedule = [];
        for ($i = 0; $i < sizeof($mergedBookedSchedule) - 1; $i++) {
            $current = $mergedBookedSchedule[$i][1];
            $next = $mergedBookedSchedule[$i + 1][0];
            $availableDuration = self::toMinute($next) - self::toMinute($current);
            if ($availableDuration >= $duration) {
                $availableSchedule[] = [$current, $next];
            }
        }

        return $availableSchedule;

    }

    public static function appendStartEndTime(&$schedule, $bound, &$schedule2, $bound2)
    {
        array_unshift($schedule, ['0:00', $bound[0]]);
        $schedule[] = [$bound[1], '23:59'];

        array_unshift($schedule2, ['0:00', $bound2[0]]);
        $schedule2[] = [$bound2[1], '23:59'];
    }

    public static function getBookedSchedule($schedule, $schedule2)
    {
        $booked = [];
        $left = 0;
        $right = 0;

        while (isset($schedule[$left]) && isset($schedule2[$right])) {
            $res = self::toMinute($schedule[$left][0]) <= self::toMinute($schedule2[$right][0]);
            if ($res) {
                $booked[] = $schedule[$left];
                $left++;
            } else {
                $booked[] = $schedule2[$right];
                $right++;
            }
        }

        while (isset($schedule[$left])) {
            $booked[] = $schedule[$left];
            $left++;
        }

        while (isset($schedule2[$right])) {
            $booked[] = $schedule2[$right];
            $right++;
        }

        return $booked;
    }

    public static function mergeBookedSchedule($schedule)
    {
        $flattened = [$schedule[0]];

        for ($i = 1; $i < sizeof($schedule); $i++) {
            $current = $schedule[$i];
            $previous = $flattened[sizeof($flattened) - 1];
            [$currentStart, $currentEnd] = $current;
            [$previousStart, $previousEnd] = $previous;
            if (self::toMinute($previousEnd) >= self::toMinute($currentStart)) {
                $newPreviousMeeting = [
                    $previousStart,
                    self::toMinute($previousEnd) > self::toMinute($currentEnd)
                        ? $previousEnd
                        : $currentEnd
                ];
                $flattened[sizeof($flattened) - 1] = $newPreviousMeeting;
            } else {
                $flattened[] = $current;
            }
        }

        return $flattened;
    }

    public static function toMinute($time)
    {
        [$hour, $minute] = explode(':', $time);
        return $hour * 60 + $minute;
    }


}