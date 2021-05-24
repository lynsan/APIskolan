<?php $page = 'test-your-knowledge';require('components/header.inc.php')?>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <div class="text">
                <h1>Testa dina kunskaper om API:er</h1>           
                <p>Testet är bara ett roligt sätt för dig att se hur mycket du kan om API:er och hur mycket du har lärt dig av APIskolan. Det finns därför ingen tidsgräns för att göra testet och du kan göra om det hur många gånger du vill.</p><br>
            </div>

            <?php 
            include('components/quiz.inc.php');

            /* The first answer in the array will be the correct one */
            $allQuestions = array(
                new Question("Vad är API förkortning för det här är en lite längre fråga?", array("Application Program Interface", "Application Period Interface", "Application Program Internet", "Application Program Internet")),
                new Question("Svaren som man får när man använder ett API kommer alltid i formatet JSON", array("Falskt", "Sant")),
                new Question("Vilken alternativ är sant?", array("Ett API fungerar som en bro mellan olika program och gör att de kan kommunicera med varandra på ett enkelt sätt", "Ett API är ett enkelt sätt att hämta data fritt från alla företag.", "Ett API fungerar som en protokoll för att få datorer att efterlikna människans naturliga intelligens.")),
                new Question("Hur svårt är det här?", array("Så enkelt!", "såsvårfrågaherregud", "Det här kan jag nog", "förvirring")),
                new Question("Hur mycket väger ett kilo fjädrar?", array("1000 gram", "1 ton", "100 gram", "5 hekto")),
                new Question("Har jag en nästa knapp?", array("svar NEJ", "Ja, tyvärr", "hela sidan gick sönder", "jag vill inte svara")),
            );
            
            $quiz = GenerateQuiz($allQuestions);
            ?>

            <div class="nav-buttons">
                <button type="button" onclick="location.href='code-examples.php';">Föregående</button>
            </div>
        </section>
    </div>

<?php include('components/footer.inc.php')?>
