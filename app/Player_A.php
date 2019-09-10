<?php
 
require __DIR__ . "/../vendor/autoload.php";

class Player_A extends Player
{
    public function setChoice($choice){
        return $this->choice = $choice;
    }
}

?>   