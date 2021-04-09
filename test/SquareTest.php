<?php


use Alexeev\Square;
use Alexeev\AlexeevException;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    public function testSolve() {
        $result = new Square();

        //0x^2+8x+4=0
        $this->assertEquals(
            [-0.5],
            $result->solve(0, 8, 4)
        );

        //2x^2+1x+0=0
        $this->assertEquals(
            [-0.5, 0],
            $result->solve(2, 1, 0)
        );

        //3x^2+6x+0=0
        $this->assertEquals(
            [-2, 0],
            $result->solve(3, 6, 0)
        );

        //0x^2+0x+8=0
        $this->expectException(AlexeevException::class);
        $result->solve(0, 0, 8);

        // Дискриминант < 0
        $this->expectException(AlexeevException::class);
        $result->solve(2, -3, 9);
    }

}
