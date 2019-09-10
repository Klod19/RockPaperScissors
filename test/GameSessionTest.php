<?php 

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";
use PHPUnit\Framework\TestCase;

final class GameSessionTest extends TestCase
{
    //test that the counter is equal to 100, so that there are 100 matches
    function testMatchesAreOneHundred(){
        $gameSession = new GameSession;
        $gameSession->startGame();
        $counter = $gameSession->getCounter();
        $this->assertEquals(100, $counter);
    }

    //test that a tie occurs when the players win the same number of games
    function testTieMessage(){
        $gameSession = new GameSession;
        $gameSession->setWonByA(50);
        $gameSession->setWonByB(50);
        $gameSession->getGameResults();
        $winner = $gameSession->getWinner();
        $this->assertEquals("tie", $winner);
    }
}

?>