<?php $page = 'quiz';require('components/header.inc.php')?>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <p>Även här uppe kan vi ha en del content</p>

            <?php 
            include('components/quiz.inc.php');

            /* The first answer in the array will be the correct one */
            $allQuestions = array(
                new Question("Vilket alternativ är rätt?", array("rätt svar", "decoy 1", "decoy 2")),
                new Question("Det här är nästa fråga", array("rätt svar", "ett annat svar", "fel svar", "ytterligare ett fel svar")),
                new Question("Vem är jkag?", array("Pilvi", "Lyn", "Pilyn", "Lynpi")),
                new Question("Hur svårt är det här?", array("Så enkelt!", "såsvårfrågaherregud", "Det här kan jag nog", "förvirring")),
                new Question("Hur mycket väger ett kilo fjädrar?", array("1000 gram", "1 ton", "100 gram", "5 hekto")),
                new Question("Har jag en nästa knapp?", array("svar NEJ", "Ja, tyvärr", "hela sidan gick sönder", "jag vill inte svara")),
            );
            
            $quiz = GenerateQuiz($allQuestions);
            ?>

            <p>MASSA TEXT  OCH INNEHÅLL HÄR NERE</p>

        </section>
    </div>

<?php include('components/footer.inc.php')?>
