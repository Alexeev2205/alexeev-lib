<?php
namespace Alexeev;

use core\LogInterface;
use core\LogAbstract;

class AlexeevLog extends LogAbstract implements LogInterface{

    public function _write()
    {
		$d = new \DateTime();
        $date = $d->format('d.m.Y_H.i.s.ms');
        $logFileName = "log/$date.log";
		
		if (!file_exists("log")) {
            mkdir("log");
        }
		
        foreach($this->log as $mass){
            echo $mass . PHP_EOL;
        }
		
		file_put_contents($logFileName, implode("\n", $this->log));
    }

    public static function log(string $str): void
    {
        self::Instance()->log[] = $str;
    }

    public static function write(): void
    {
        self::Instance()->_write();
    }
}