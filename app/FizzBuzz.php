<?php

namespace App;

class FizzBuzz
{
    /**
     * @param $number
     * @return mixed
     */
    public function execute($number)
    {
        $result = $number;

        if ($number % 15 === 0) {
            $result = 'FizzBuzz';
        } elseif ($number % 3 === 0) {
            $result = 'Fizz';
        } elseif ($number % 5 === 0) {
            $result = 'Buzz';
        }

        return $result;
    }

    /**
     * @param $number
     * @return array
     */
    public function executeUpTo($number): array
    {
        return array_map(function ($item) {
            return $this->execute($item);
        }, range(1, $number));
    }
}
