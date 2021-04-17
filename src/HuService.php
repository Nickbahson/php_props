<?php
namespace HeroUnit;

class HuService {
    
    
    public function arrayFromPhrase($phrase){
        return explode(' ', $phrase);
    }

    public function sumOfNumbers($num1, $num2) {
        return $num1 + $num2 + 0.01; // + 0.01 so the test fails
    }
}