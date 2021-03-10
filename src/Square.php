<?php
namespace Alexeev;
use core\EquationInterface;

class Square extends Line implements EquationInterface
{
    public function solve(float $a, float $b, float $c): array
    {
        if($a == 0){
            return parent::line($b, $c);
        }
        $D = $this->searchD($a, $b, $c);
        if($D > 0){
            $X = ((-$b)+sqrt($D))/(2*$a);
            $X2 = ((-$b)-sqrt($D))/(2*$a);
            return array($this->$X, $this->$X2);
        }
        if($D==0){
            $X = -($b / (2 * $a));
            return array($this->$X);
        }
        if($D<0)
        throw new AlexeevException('Корней нет!');

    }
    protected function searchD($a, $b, $c){
        $D = $b * $b - 4 * $a * $c;
        return $D;
    }
}