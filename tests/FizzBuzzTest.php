<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @var FizzBuzz
     */
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function translates1ForFizzBuzz()
    {
       $actual = $this->fizzBuzz->execute(1);

       $this->assertEquals(1, $actual);
    }

    /**
     * @test
     */
    public function translates2ForFizzBuzz()
    {
        $actual = $this->fizzBuzz->execute(2);

        $this->assertEquals(2, $actual);
    }

    /**
     * @test
     */
    public function translates3ForFizzBuzz()
    {
        $actual = $this->fizzBuzz->execute(3);

        $this->assertEquals('Fizz', $actual);
    }

    /**
     * @test
     */
    public function translates5ForFizzBuzz()
    {
        $actual = $this->fizzBuzz->execute(5);

        $this->assertEquals('Buzz', $actual);
    }

    /**
     * @test
     */
    public function translates6ForFizzBuzz()
    {
        $actual = $this->fizzBuzz->execute(6);

        $this->assertEquals('Fizz', $actual);
    }

    /**
     * @test
     */
    public function translates10ForFizzBuzz()
    {
        $actual = $this->fizzBuzz->execute(10);

        $this->assertEquals('Buzz', $actual);
    }

    /**
     * @test
     */
    public function translates15ForFizzBuzz()
    {
        $actual = $this->fizzBuzz->execute(15);

        $this->assertEquals('FizzBuzz', $actual);
    }

    /**
     * @test
     */
    public function translates123ForFizzBuzz()
    {
        $actual = $this->fizzBuzz->execute(123);

        $this->assertEquals('Fizz', $actual);
    }

    /**
     * @test
     */
    public function translates12345ForFizzBuzz()
    {
        $actual = $this->fizzBuzz->execute(12345);

        $this->assertEquals('FizzBuzz', $actual);
    }

    /**
     * @test
     */
    public function translates5UpToFizzBuzz()
    {
        $actual = $this->fizzBuzz->executeUpTo(5);

        $this->assertEquals([
            1, 2, 'Fizz', 4, 'Buzz',
        ], $actual);
    }

    /**
     * @test
     */
    public function translates10UpToFizzBuzz()
    {
        $actual = $this->fizzBuzz->executeUpTo(10);

        $this->assertEquals([
            1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz',
        ], $actual);
    }
}
