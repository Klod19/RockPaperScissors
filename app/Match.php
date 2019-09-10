<?php
 
require __DIR__ . "/../vendor/autoload.php";

class Match
{

    public $checker = [
        [
            "choiceA" => "paper",
            "choiceB" => "scissors" ,
            "result"  => "B"
        ],
        [
            "choiceA" => "scissors", 
            "choiceB" => "rock" ,
            "result"  => "B"
        ],        
        [
            "choiceA" => "rock", 
            "choiceB" => "paper" ,
            "result"  => "B"
        ],
        [
            "choiceA" => "scissors", 
            "choiceB" => "paper" ,
            "result"  => "A"
        ],
        [
            "choiceA" => "rock", 
            "choiceB" => "scissors" ,
            "result"  => "A"
        ],
        [
            "choiceA" => "paper", 
            "choiceB" => "rock" ,
            "result"  => "A"
        ],
    ];

    public function getResult($choiceB, $choiceA){
        // if(($choiceB == "scissors" && $choiceA == "paper") || ($choiceB == "rock" && $choiceA == "scissors") || ($choiceB == "paper" && $choiceA == "rock")){
        //     return "B";
        // }
        // else if(($choiceA == "scissors" && $choiceB == "paper") || ($choiceA == "rock" && $choiceB == "scissors") || ($choiceA == "paper" && $choiceB == "rock")){
        //     return "A";
        // }
        // else if($choiceB == $choiceA){
        //     return "tie";
        // }
        if($choiceB == $choiceA){
            return "tie";
        };

        foreach ($this->checker as $option){
            if($option["choiceA"] == $choiceA && $option["choiceB"] == $choiceB){
                return $option["result"];
            }
        }

    }

}

?>   