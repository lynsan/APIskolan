<?php 

class Question{
    public $question;
    public $decoys;
    private $answer;
    public $buttons;

    function __construct($question, $array){
        $this->question = $question;
        $this->answer = $array[0];
        shuffle($array);
        $this->decoys = $array;
        $this->AddButtons();
    }


    function AddButtons(){

        for($x = 0; $x < count($this->decoys); $x++){
    
            if($this->decoys[$x] == $this->answer){
                $this->buttons[$x] = '<button class="correct alternative hover" onclick="checkAnswer(this)">'.$this->decoys[$x].'<i class="fas fa-check icon check"></i></button>';
            }   
            else{
    
                $this->buttons[$x] = '<button class="alternative hover" onclick="checkAnswer(this)">'.$this->decoys[$x].'<i class="fas fa-times icon cross"></i></button>';
            }
        }
    
    }

}


?>