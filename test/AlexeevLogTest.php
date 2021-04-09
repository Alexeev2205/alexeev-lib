<?php

use Alexeev\AlexeevLog;
use PHPUnit\Framework\TestCase;

class AlexeevLogTest extends TestCase
{
    public function testInstance(): void {
        $this->assertInstanceOf(AlexeevLog::class, AlexeevLog::Instance());
    }

    public function testLog(): void {
        $this->expectOutputString("Hello, World!\r\n");
        AlexeevLog::log("Hello, World!");
        AlexeevLog::write();
    }
}
