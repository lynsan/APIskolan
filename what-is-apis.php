<?php $page = 'what-is-apis';require('components/header.inc.php')?>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <h1>Vad är ett API?</h1>
            <p>API är en förkortning för Application Program Interface och är ett begrepp som är vanligt att höra inom programmering. Men vad är ett API för något? Man kan beskriva ett API som ett sätt att hämta och skicka data mellan två olika program.</p>
            <br>
            <p>Ett exempel på det är när du vill skriva ut ett dokument. Ditt ordbehandlingsprogram måste kommunicera med operativsystemet och meddela att du vill skriva ut ditt dokument. Denna kommunikation sker då via operativsystemets API. Programmet säger “Hej, operativsystemet! Jag vill skriva ut det här dokumentet”, och operativsystemet svarar med “Okej! Jag pratar med skrivaren”.</p>
            <br>

                <!-- QUIZ MODULE -->
                <?php 
                include('components/quiz.inc.php');

                /* The first answer in the array will be the correct one */
                $allQuestions = array(
                    new Question("Vilket alternativ är rätt?", array("rätt svar", "decoy 1", "decoy 2", "decoy 3")),
                    new Question("Det här är nästa fråga", array("rätt svar", "ett annat svar", "fel svar", "ytterligare ett fel svar")),
                    new Question("Vem är jag?", array("Pilvi", "Lyn", "Pilyn", "Lynpi")),
                    new Question("Hur svårt är det här?", array("Så enkelt!", "såsvårfrågaherreguuud", "Det här kan jag nog", "förvirring")),
                    new Question("Hur mycket väger ett kilo fjädrar?", array("1000 gram", "1 ton", "100 gram", "5 hekto")),
                    new Question("Har jag en nästa knapp?", array("svar NEJ", "Ja, tyvärr", "hela sidan gick sönder", "jag vill inte svara")),
                );
                
                $quiz = GenerateQuiz($allQuestions);
                ?>

            
            <p>Det som gör det så bra med API:er är att ditt ordbehandlingsprogram då inte behöver oroa sig för hur man pratar med skrivaren, utan kan bara be operativsystemet, som har bättre koll, att göra det. Om du då har ett annat program som vill skriva ut saker, så kan det göra det med API på samma sätt som ditt ordbehandlingsprogram.</p>
            <div class="callout">
                <p>Ett API fungerar som en bro för att program, system och applikationer ska kunna kommunicera mellan varandra på ett enkelt sätt.</p>
            </div>
            <img class="exampleImg"src="images/apitidtabellex.svg" alt="">
            <p>Säg att du ska åka och hälsa på en vän. För att ta reda på när bussen går och hur lång tid din resa kommer att ta så kanske du använder dig av en reseapp på telefonen. Där skriver du in vilka stationer du ska åka från och till, och när du vill vara framme. Det som händer då är att reseappen frågar trafikföretagets API “Hej, kan jag få en busstidtabell för just dessa hållplatser?”. API:et plockar då fram den informationen från trafikföretagets servrar och skickar tillbaka tidtabellen till din reseapp som då kan visa när bussen går från din hållplats och hur lång tid resan kommer att ta.</p>
            <div class="nav-buttons">
                <button type="button" onclick="location.href='open-data.php';">Föregående</button>
                <button type="button" onclick="location.href='postman-guide.php';">Nästa</button>
            </div>
        </section>
    </div>
    
<?php include('components/footer.inc.php')?>