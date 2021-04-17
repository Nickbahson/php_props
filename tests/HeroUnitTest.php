<?php
namespace HeroUnitTests\Test;

use HeroUnit\HuService;
use PHPUnit\Framework\TestCase;

class HeroUnitServiceTest extends TestCase {

    // TODO:: include HuService in the constructor instead
    private $HuService;

    protected function setUp(): void {
        $this->HuService = new HuService();
    }

    public function tearDown(): void {
        unset($this->HuService);
    }

    public function testArrayFromPhrase(){
        $hero = $this->HuService;
        $results = $hero->arrayFromPhrase('Hello, how are you?');
        $expected = ['Hello,', 'how', 'are', 'you?'];
        $this->assertEquals($expected, $results);
    }
    
    public function testSumOfNumbers(){
        $hero = $this->HuService;
        $num1 = 15;
        $num2 = 33;
        $results = $hero->sumOfNumbers($num1, $num2);
        $expected = $num2 + $num1;
        $this->assertEquals($expected, $results);
    }
}