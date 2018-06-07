<?php

Class Calculator
{

    public function __constructor()
    {
        
    }

    public function add($a, $b)
    {
        return $a+$b;
    }

    public function divide($a, $b)
    {
        if($b == 0)
            return false;
            
        return sprintf("%.3f",$a/$b);
    }


}

