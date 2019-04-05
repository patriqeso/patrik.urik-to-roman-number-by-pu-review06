<?php
/**
 * Created by PhpStorm.
 * User: patrik.urik
 * Date: 2019-04-04
 * Time: 21:51
 */

namespace Convert;


class toRomanNumber
{
    /**
     * These are the characters that are used in Roman numerals,
     * and the values they represent. M=1000,
     * D=500, C=100, L=50, X=10, V=5, and I=1.
     * There is a more detailed explanation below the calculator.
     * Using the strict rules of Roman Numerals,
     * the largest number that can be represented is 4,999.
     *
     * @param int $num
     * @return int
     */
    public function convertToRomanNum(int $num): string
    {

        // Convert the integer into an integer (just to make sure)
        $integer = (int)($num);
        $result = '';

        // Create a lookup array that contains all of the Roman numerals.
        $lookup = array('M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1);

        foreach($lookup as $roman => $value){
            // Determine the number of matches
            $matches = (int)($integer/$value);

            // Add the same number of characters to the string
            $result .= str_repeat($roman,$matches);

            // Set the integer to be the remainder of the integer and the value
            $integer = $integer % $value;
        }

        // The Roman numeral should be built, return it
        return $result;

    }
}