<?php 

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";
use PHPUnit\Framework\TestCase;

final class PlayerTest extends TestCase
{
    //test that Player B's choice is contained in the choices array
    public function testChoiceIsInSpectrum(){
        $player = new Player_B;
        $player->setChoice();
        $choice = $player->getChoice();
        $choices = $player->getChoicesArray();
        $this->assertContains($choice, $choices);
    }

    //test that Player A's choice can be set correctly
    public function testChoiceIsSetCorrectly(){
        $player = new Player_A;
        $player->setChoice("test_choice");
        $choice = $player->getChoice();
        $this->assertEquals("test_choice", $choice);
    }
}

?>