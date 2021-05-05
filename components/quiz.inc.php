
<?php include('components/quiz.object.php');

function GenerateQuiz($allQuestions){
    echo '<div class="quiz">';
    
    foreach($allQuestions as $question){

        if($question == $allQuestions[0]){
            $questionBoxDiv = '<div class="question-box active-question">';
        }
        else{
            $questionBoxDiv = '<div class="question-box">';
        }

        echo $questionBoxDiv;
        
        PrintQuestion($question);
        PrintButtons($question);

        //skriver endast ut nästaknappen om det inte är sista frågan
        if($question != end($allQuestions)){
            echo '<button onclick="nextQuestion()">nästa fråga</button>';
        }

        echo '</div>';
    }

    echo '</div>';
}

function PrintQuestion($question){
    echo '<p class="question">'. $question->question .'</p>';
}

function PrintButtons($question){
    foreach($question->buttons as $button){
        echo $button;
    }
}

?>
