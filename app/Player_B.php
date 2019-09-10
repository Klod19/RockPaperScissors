<?php
 
require __DIR__ . "/../vendor/autoload.php";

class Player_B extends Player
{
    public $choices = ["rock", "paper", "scissors"];
    public $choice = "";

    /** SETTERS */
    public function setChoice(){
        return $this->choice = $this->choices[array_rand($this->choices,1)];
    }

    /** GETTERS */
    public function getChoicesArray(){
        return $this->choices;
    }
}

?>   