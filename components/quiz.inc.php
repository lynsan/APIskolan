
<?php include('components/quiz.object.php');

function GenerateQuiz($allQuestions){
    echo '<div class="quiz">';
    
    for($i = 0; $i < count($allQuestions); $i++){
        if($i == 0){
            $questionBoxDiv = '<div class="question-box active-question">';
        }
        else{
            $questionBoxDiv = '<div class="question-box">';
        }
        
        echo $questionBoxDiv;

        $currentCount = $i+1;
        PrintQuestion($allQuestions[$i], count($allQuestions), $currentCount);

        echo '<div class="button-box">';
        PrintButtons($allQuestions[$i]);
        echo '</div>';

        //skriver endast ut nästaknappen om det inte är sista frågan
        if($allQuestions[$i] != end($allQuestions)){
            echo '<button class="next" onclick="nextQuestion()">Nästa<i class="fas fa-chevron-right next-icon"></i></button>';
        }
        else{
            echo '<button class="next" onclick="resetQuiz()">Gör om test <i class="fas fa-sync-alt next-icon"></i></button>';
        }

        echo '</div>';
    }

    /* foreach($allQuestions as $question){

        if($question == $allQuestions[0]){
            $questionBoxDiv = '<div class="question-box active-question">';
        }
        else{
            $questionBoxDiv = '<div class="question-box">';
        }

        echo $questionBoxDiv;
        
        PrintQuestion($question, count($allQuestions));
        
        echo '<div class="button-box">';
        PrintButtons($question);
        echo '</div>';
        //skriver endast ut nästaknappen om det inte är sista frågan
        if($question != end($allQuestions)){
            echo '<button class="next" onclick="nextQuestion()">Nästa<i class="fas fa-chevron-right next-icon"></i></button>';
        }
        else{
            echo '<button class="next" onclick="resetQuiz()">Gör om test <i class="fas fa-sync-alt next-icon"></i></button>';
        }

        echo '</div>';
    } */

    echo '</div>';
}

function PrintQuestion($question, $count, $currentCount){
    echo '<div class="question-row"><p class="question">'. $question->question .'</p><p class="counter">Fråga '. $currentCount . ' av '. $count .'</p></div>';
}

function PrintButtons($question){
    foreach($question->buttons as $button){
        echo $button;
    }
}

?>
