<?php $page = 'quiz';require('components/header.inc.php')?>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <h1>Quiz om API </h1>           
            <p>Quizet är bara ett roligt sätt att testa hur mycket du kan om API.</p>
            <p>Det finns därför ingen tidsgräns för att göra quizet.</p><br>

            <?php 
            include('components/quiz.inc.php');

            /* The first answer in the array will be the correct one */
            $allQuestions = array(
                new Question("Vad är API förkortning för?", array("Application Program Interface", "Application Period Interface", "Application Program Internet")),
                new Question("Det här är nästa fråga", array("rätt svar", "ett annat svar", "fel svar", "ytterligare ett fel svar")),
                new Question("Vem är jkag?", array("Pilvi", "Lyn", "Pilyn", "Lynpi")),
                new Question("Hur svårt är det här?", array("Så enkelt!", "såsvårfrågaherregud", "Det här kan jag nog", "förvirring")),
                new Question("Hur mycket väger ett kilo fjädrar?", array("1000 gram", "1 ton", "100 gram", "5 hekto")),
                new Question("Har jag en nästa knapp?", array("svar NEJ", "Ja, tyvärr", "hela sidan gick sönder", "jag vill inte svara")),
            );
            
            $quiz = GenerateQuiz($allQuestions);
            ?>

        </section>
    </div>

<?php include('components/footer.inc.php')?>
