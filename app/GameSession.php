<?php 
require __DIR__ . "/../vendor/autoload.php";

class GameSession{
    public $wonByA = 0;
    public $wonByB = 0;
    public $tie = 0;
    public $counter = 0;
    public $winner = "";
    public $won = 0;
    public $lost= 0;
    public $result =[];
    public $choiceB = "";

    //even if we always set the choice of the Player A to "paper", set it as function parameter, for scalability
    public function startGame($choiceA){
        $playerB = new Player_B;
        $playerA = new Player_A;
        $playerB->setChoice();
        $this->choiceB = $playerB->getChoice();
        

        //set the game result
        $match = new Match;
        $this->result = [
            "final_result"=> $match->getResult($this->choiceB, $choiceA),
            "choiceB" => $this->choiceB
        ];
        // while($this->counter < 100){
        //     $playerB->setChoice();
        //     $choiceB = $playerB->getChoice();
            
        //     $playerA->setChoice($choiceA);
        //     $choiceA = $playerA->getChoice();
        //     //compare the two choices with the class Match; increment the count of won games and tie accordingly
        //     $match = new Match;
        //     $result = $match->getResult($choiceB, $choiceA);
        //     switch ($result) {
        //         case "B":
        //             $this->wonByB++;
        //             break;
        //         case "A":
        //             $this->wonByA++;
        //             break;
        //         case "tie":
        //             $this->tie++;
        //             break;
        //     }
        //     $this->counter++;
        // }
    }
    //put the result in an array: result + choice
    public function getGameResults(){
        // if($this->wonByA > $this->wonByB){
        //     $this->winner = "Player A";
        //     $this->won = $this->wonByA;
        //     $this->lost = $this->wonByB;
        // }
        // else if($this->wonByA < $this->wonByB){
        //     $this->winner = "Player B";
        //     $this->won = $this->wonByB;
        //     $this->lost = $this->wonByA;
        // }
        // else{
        //     $this->winner = "tie";
        // }
    
        // $resultMsg = $this->winner != "tie" ? "<p>The winner is ".$this->winner." (".$this->won." to ".$this->lost.")</p>" : "<p>There is a tie</p>";
    
        // echo "<p>Player A wins ".$this->wonByA." of 100 games</p>"; 
        // echo "<p>Player B wins ".$this->wonByB." of 100 games</p>"; 
        // echo "<p>Tie: ".$this->tie." of 100 games</p>";
        // echo $resultMsg;
        return $this->result;
        
    }    

    /** GETTERS */
    public function getCounter(){
        return $this->counter;
    }

    public function getWinner(){
        return $this->winner;
    }

    /** SETTERS */
    public function setWonByA($number){
        return $this->setWonByA = $number;
    }

    public function setWonByB($number){
        return $this->setWonByB = $number;
    }

}

?>