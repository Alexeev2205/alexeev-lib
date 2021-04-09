<?php


use Alexeev\Line;
use Alexeev\AlexeevException;
use PHPUnit\Framework\TestCase;

class LineTest extends TestCase
{
    public function testLine() {
        $solver = new Line();

        // 8x+4=0
        $this->assertEquals(
            [-0.5],
            $solver->line(8, 4)
        );

        // 2x+1=0
        $this->assertEquals(
            [-0.5],
            $solver->line(2, 1)
        );

        // a == 0
        $this->expectException(AlexeevException::class);
        $solver->line(0, 1);
    }
}
