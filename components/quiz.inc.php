
<?php include('components/quiz.object.php');

$allQuestions = array(
    new Question("Vilket alternativ är rätt?", array("rätt svar", "decoy 1", "decoy 2", "decoy 3")),
    new Question("Det här är nästa fråga", array("rätt svar", "ett annat svar", "fel svar", "ytterligare ett fel svar")),
);

//visar upp första frågan med en active-question class
$first = $allQuestions[0];
echo '<div class="question-box active-question">';
    echo '<p class="question">'. $first->question .'</p>';
    foreach($first->buttons as $button){
        echo $button;
    }
    echo '<button onclick="nextQuestion()">nästa fråga</button>';
echo '</div>';

//tar bort första frågan från listan med frågor
array_shift($allQuestions);

//skriver ut resten av frågorna
foreach($allQuestions as $question){

    echo '<div class="question-box">';

        echo '<p class="question">'. $question->question .'</p>';
        foreach($question->buttons as $button){
            echo $button;
        }
        echo '<button onclick="nextQuestion()">nästa fråga</button>';
    echo '</div>';
}

?>
