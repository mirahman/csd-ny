<?php

include __DIR__."../../../Calculator.php";

class CalculatorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->tester = new Calculator;
    }

    protected function _after()
    {
    }

    // tests
    public function testBasicAddition()
    {
        $this->assertEquals($this->tester->add(2,4),6);
    }

    public function testBasicRandomAddition()
    {
        $num1 = rand(1,100);
        $num2 = rand(100,200);
        $this->assertEquals($this->tester->add($num1,$num2),$num1+$num2);
    }

    public function testBasicNegativeAddition()
    {
        $this->assertEquals($this->tester->add(-2,-4),-6);
    }

    public function testDivide()
    {
        $this->assertEquals($this->tester->divide(4,2),2);
    }

    public function testDivideWithFraction()
    {
        $this->assertEquals($this->tester->divide(1,3),.333);
    }

    public function testDivideWithZero()
    {
        $this->assertFalse($this->tester->divide(1,0));
    }

}