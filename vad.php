<?php $page = 'vad';require('components/header.inc.php')?>

    <div class="main-content" onclick="hide_menu()">
        <section>
            <h1>Vad är ett API?</h1>
            <p>Application Program Interface förkortas API och är ett begrepp som är vanligt att höra inom programmering. Men vad är API för något? Det kan beskrivas som ett sätt att hämta och skicka data. API fungerar som en bro för att program, system och applikationer ska kunna kommunicera mellan varandra på ett enkelt sätt.</p>
            <img class="exampleImg"src="images/APItidtabellexempel.svg" alt="">
            <p>Lisa ska åka och hälsa på en kompis, men hon vet inte när bussen går. För att räkna ut när hon ska gå hemifrån tar hon fram sin telefon där hon har en reseapp som kan hjälpa Lisa att planera sin resa. Hon skriver in vilken station hon ska åka från, till och när hon vill vara framme. Det som händer då är att reseappen skickar en fråga till ett API som sin tur hämtar just den informationen från trafikföretagets servrar. Därefter skickar API:et tillbaka den information som reseappen har frågat efter. Reseappen kan då visa när bussen går från Lisas station.</p>
        </section>
    </div>
    
<?php include('components/footer.inc.php')?>