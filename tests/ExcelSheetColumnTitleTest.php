<?php

namespace Tests;

use App\Leetcode\ExcelSheetColumnTitle;
use PHPUnit\Framework\TestCase;

class ExcelSheetColumnTitleTest extends testcase
{

    /**
     *
     * Given an integer columnNumber, return its corresponding column title as it appears in an Excel sheet.
     * For example:
     * A -> 1
     * B -> 2
     * C -> 3
     * ...
     * Z -> 26
     * AA -> 27
     * AB -> 28
     * ...
     * https://leetcode.com/problems/excel-sheet-column-title/description/
     *
     * @dataProvider provider
     * @test
     */
    public function excel_sheet_column_title($number, $result)
    {
        $this->assertSame($result, ExcelSheetColumnTitle::convert($number));
    }

    public static function provider()
    {
        return [
            [701, 'ZY'],
        ];
    }
}