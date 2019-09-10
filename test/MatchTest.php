<?php 

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";
use PHPUnit\Framework\TestCase;

final class MatchTest extends TestCase
{
    //test that Player A wins ("A" is returned)
    public function testPlayerAWins(){
        $playerA = new Player_A;
        //Player_A class has a manual setter method
        $playerB = new Player_A;
        $choiceA = $playerA->setChoice("paper");
        $choiceB = $playerB->setChoice("rock");
        $match = new Match;
        $result = $match->getResult($choiceB, $choiceA);
        $this->assertEquals("A", $result);
    }

    //test that Player B wins ("B" is returned)
    public function testPlayerBWins(){
        $playerA = new Player_A;
        //Player_A class has a manual setter method
        $playerB = new Player_A;
        $choiceA = $playerA->setChoice("paper");
        $choiceB = $playerB->setChoice("scissors");
        $match = new Match;
        $result = $match->getResult($choiceB, $choiceA);
        $this->assertEquals("B", $result);
    }

    //test tie
    public function testTieOccurs(){
        $playerA = new Player_A;
        //Player_A class has a manual setter method
        $playerB = new Player_A;
        $choiceA = $playerA->setChoice("paper");
        $choiceB = $playerB->setChoice("paper");
        $match = new Match;
        $result = $match->getResult($choiceB, $choiceA);
        $this->assertEquals("tie", $result);
    }
}

?>