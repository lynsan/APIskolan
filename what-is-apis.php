<?php $page = 'what-is-apis';require('components/header.inc.php')?>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <div class="text">
                <h1>Vad är ett API?</h1>
                <p>API är en förkortning för Application Program Interface och är ett begrepp som är vanligt att höra inom programmering. Men vad är ett API för något? Man kan beskriva ett API som ett sätt att hämta och skicka data mellan två olika program.</p>
                <br>
                <p>Ett exempel på det är när du vill skriva ut ett dokument. Ditt ordbehandlingsprogram måste kommunicera med operativsystemet och meddela att du vill skriva ut ditt dokument. Denna kommunikation sker då via operativsystemets API. Programmet säger “Hej, operativsystemet! Jag vill skriva ut det här dokumentet”, och operativsystemet svarar med “Okej! Jag pratar med skrivaren”.</p>
                <br>
                <p>Det som gör det så bra med API:er är att ditt ordbehandlingsprogram då inte behöver oroa sig för hur man pratar med skrivaren, utan kan bara be operativsystemet, som har bättre koll, att göra det. Om du då har ett annat program som vill skriva ut saker, så kan det göra det med API på samma sätt som ditt ordbehandlingsprogram.</p>
                <div class="callout">
                    <p>Ett API fungerar som en bro för att program, system och applikationer ska kunna kommunicera mellan varandra på ett enkelt sätt.</p>
                </div>
            </div>
            <img class="exampleImg"src="images/apitidtabellex.svg" alt="Transport application gets the timetable using API">
            <div class="text">
                <p>Säg att du ska åka och hälsa på en vän. För att ta reda på när bussen går och hur lång tid din resa kommer att ta så kanske du använder dig av en reseapp på telefonen. Där skriver du in vilka stationer du ska åka från och till, och när du vill vara framme. Det som händer då är att reseappen frågar trafikföretagets API “Hej, kan jag få en busstidtabell för just dessa hållplatser?”. API:et plockar då fram den informationen från trafikföretagets servrar och skickar tillbaka tidtabellen till din reseapp som då kan visa när bussen går från din hållplats och hur lång tid resan kommer att ta.</p>
                <br>
                <br>
                <h3>Videoförklaring om API</h3>
                <p>Lantmäteriet Sverige har lagt upp en video på sin youtube-kanal där de förklarar vad ett API är för något, visualiserar hur det fungerar och hur det används i vardagen. <a href="https://www.youtube.com/watch?v=-m7yXolfptY">Syntolkad version av videon</a></p>
                <br>
                <div class="video-container">
                    <iframe class="LantVideo" width="560" height="315" src="https://www.youtube.com/embed/OeXnuug_t3o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
                </div>
                <h2>Det finns olika typer av APIer</h2>
                <br>
                <h3>Öppna API:er</h3>
                <p>Ett API kan antingen vara öppet eller stängt. Man kan säga att ett öppet API tillåter andra att kunna utnyttja delar av sin data. Det kan vara en myndighet som låter andra personer att kunna använda utvalda delar av sin data. Till exempel, Trafikverkets API som idag används av bland annat Hitta.se för att användarna ska kunna ta del av trafikinformation.</p>
                <br>
                <br>
                <h3>Stängda API:er</h3>
                <p>Till skillnad med öppet API, så innebär ett stängt API att man istället har ordnande strukturer som används för att hantera data som görs inuti själva koncernen. Ett exempel kan vara ett bokningssystem på ett hotell.</p>
                <br>
                <p>I nästa kapitel besrkiver vi mer om varför man vill använda API:er.</p>
            </div>
            <div class="nav-buttons">
                <button type="button" onclick="location.href='open-data.php';"><i class="fas fa-chevron-left previousChapter-icon"></i>Föregående</button>
                <button type="button" onclick="location.href='why-use-apis.php';">Nästa<i class="fas fa-chevron-right nextChapter-icon"></i></button>
            </div>
        </section>
    </div>
    
<?php include('components/footer.inc.php')?>