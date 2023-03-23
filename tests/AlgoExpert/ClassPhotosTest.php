<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ClassPhotos;
use PHPUnit\Framework\TestCase;

class ClassPhotosTest extends TestCase
{

    /**
     * It's photo day at the local school, and you're the photographer assigned to
     * take class photos. The class that you'll be photographing has an even number
     * of students, and all these students are wearing red or blue shirts. In fact,
     * exactly half of the class is wearing red shirts, and the other half is wearing
     * blue shirts. You're responsible for arranging the students in two rows before
     * taking the photo. Each row should contain the same number of the students and
     * should adhere to the following guidelines:
     *
     * All students wearing red shirts must be in the same row.
     * All students wearing blue shirts must be in the same row.
     *
     * Each student in the back row must be strictly taller than the student
     * directly in front of them in the front row.
     *
     * You're given two input arrays: one containing the heights of all the students
     * with red shirts and another one containing the heights of all the students
     * with blue shirts. These arrays will always have the same length, and each
     * height will be a positive integer. Write a function that returns whether or
     * not a class photo that follows the stated guidelines can be taken.
     *
     * Note: you can assume that each class has at least 2 students.
     * Sample Input
     * redShirtHeights = [5, 8, 1, 3, 4]
     * blueShirtHeights = [6, 9, 2, 4, 5]
     *
     * Sample Output
     * true // Place all students with blue shirts in the back row.
     * https://www.algoexpert.io/questions/class-photos
     *
     * @dataProvider provider
     * @test
     */
    public function class_photos_test($arr, $arr2, $expected)
    {
        $this->assertSame($expected, ClassPhotos::validate($arr, $arr2));
    }

    public static function provider()
    {
        return [
            [[5, 8, 1, 3, 4], [6, 9, 2, 4, 5], true],
            [[5, 8, 1, 3, 4], [6, 9, 2, 2, 5], false],
            [[6, 9, 2, 4, 5], [5, 8, 1, 3, 4], true],
            [[6, 9, 2, 4, 5, 1], [5, 8, 1, 3, 4, 9], false],
            [[6], [6], false],
            [[126], [125], true],
            [[1, 2, 3, 4, 5], [2, 3, 4, 5, 6], true],
            [[1, 1, 1, 1, 1, 1, 1, 1], [5, 6, 7, 2, 3, 1, 2, 3], false],
            [[1, 1, 1, 1, 1, 1, 1, 1], [2, 2, 2, 2, 2, 2, 2, 2], true],
            [[19, 2, 4, 6, 2, 3, 1, 1, 4], [21, 5, 4, 4, 4, 4, 4, 4, 4], false],
            [[19, 19, 21, 1, 1, 1, 1, 1], [20, 5, 4, 4, 4, 4, 4, 4], false],
            [[3, 5, 6, 8, 2], [2, 4, 7, 5, 1], true],
            [[3, 5, 6, 8, 2, 1], [2, 4, 7, 5, 1, 6], false],
            [[4, 5], [5, 4], false],
            [[5, 6], [5, 4], true],
        ];
    }
}
