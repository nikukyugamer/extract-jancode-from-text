<?php
require "index.php";

class IndexTest extends \PHPUnit\Framework\TestCase {
    static function setUpBeforeClass() {
        $beginning_4_digits_13 = '4123456789012';
        $beginning_6_digits_12 = '612345678901';
        $beginning_8_digits_12 = '812345678901';

        $beginning_4_digits_12 = '412345678901';
        $beginning_4_digits_14 = '41234567890123';
        $beginning_6_digits_11 = '61234567890';
        $beginning_6_digits_13 = '6123456789012';
        $beginning_8_digits_11 = '81234567890';
        $beginning_8_digits_13 = '8123456789012';

        $beginning_0_digits_12 = '012345678901';
        $beginning_0_digits_13 = '0123456789012';
        $beginning_1_digits_12 = '112345678901';
        $beginning_1_digits_13 = '1123456789012';
        $beginning_2_digits_12 = '212345678901';
        $beginning_2_digits_13 = '2123456789012';
        $beginning_3_digits_12 = '312345678901';
        $beginning_3_digits_13 = '3123456789012';
        $beginning_5_digits_12 = '512345678901';
        $beginning_5_digits_13 = '5123456789012';
        $beginning_7_digits_12 = '712345678901';
        $beginning_7_digits_13 = '7123456789012';
        $beginning_9_digits_12 = '912345678901';
        $beginning_9_digits_13 = '9123456789012';

        define(
            'VALID_NUMBERS',
            array(
                $beginning_4_digits_13,
                $beginning_6_digits_12,
                $beginning_8_digits_12,
            )
        );

        define(
            'INVALID_NUMBERS',
            array(
                $beginning_0_digits_12,
                $beginning_0_digits_13,
                $beginning_1_digits_12,
                $beginning_1_digits_13,
                $beginning_2_digits_12,
                $beginning_2_digits_13,
                $beginning_3_digits_12,
                $beginning_3_digits_13,
                $beginning_5_digits_12,
                $beginning_5_digits_13,
                $beginning_7_digits_12,
                $beginning_7_digits_13,
                $beginning_9_digits_12,
                $beginning_9_digits_13,
            )
        );
    }

    public function testArrayCount() {
        $this->assertEquals(3, count(VALID_NUMBERS));
        $this->assertEquals(14, count(INVALID_NUMBERS));
    }

    public function testPickupValidNumber() { // under writing...
        $pattern    = "/\A[4][0-9]{12}\z/";
        $target_str = VALID_NUMBERS[0]; // 4123456789012
        $isMatch    = preg_match($pattern, $target_str, $array_result);

        $this->assertEquals(true, $isMatch);
    }
}