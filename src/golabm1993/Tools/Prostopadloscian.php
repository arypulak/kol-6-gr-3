<?php

namespace golabm1993\Tools;

class Prostopadloscian
{

    private $a;
    private $b;
    private $h;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }
    
    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
    
    public function getH()
    {
        return $this->h;
    }
    
    public function pole()
    {
        return  2 * $this->a * $this->h + 2 * $this->b * $this->h;
    }
}
