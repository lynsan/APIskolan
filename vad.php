<?php $page = 'vad';require('components/header.inc.php')?>

    <div class="main-content" onclick="hide_menu()">
        <section>
            <h1>Vad är ett API?</h1>
            <p>API är en förkortning för Application Program Interface och är ett begrepp som är vanligt att höra inom programmering. Men vad är ett API för något? Man kan beskriva ett API som ett sätt att hämta och skicka data mellan två olika program.</p>
            <br>
            <p>Ett exempel på det är när du vill skriva ut ett dokument. Ditt ordbehandlingsprogram måste kommunicera med operativsystemet och meddela att du vill skriva ut ditt dokument. Denna kommunikation sker då via operativsystemets API. Programmet säger “Hej, operativsystemet! Jag vill skriva ut det här dokumentet”, och operativsystemet svarar med “Okej! Jag pratar med skrivaren”.</p>
            <br>
            <p>Det som gör det så bra med API:er är att ditt ordbehandlingsprogram då inte behöver oroa sig för hur man pratar med skrivaren, utan kan bara be operativsystemet, som har bättre koll, att göra det. Om du då har ett annat program som vill skriva ut saker, så kan det göra det med API på samma sätt som ditt ordbehandlingsprogram.</p>
            <div class="callout">
                <p>Ett API fungerar som en bro för att program, system och applikationer ska kunna kommunicera mellan varandra på ett enkelt sätt.</p>
            </div>
            <img class="exampleImg"src="images/APItidtabellexempel.svg" alt="">
            <p>Säg att du ska åka och hälsa på en vän. För att ta reda på när bussen går och hur lång tid din resa kommer att ta så kanske du använder dig av en reseapp på telefonen. Där skriver du in vilka stationer du ska åka från och till, och när du vill vara framme. Det som händer då är att reseappen frågar trafikföretagets API “Hej, kan jag få en busstidtabell för just dessa hållplatser?”. API:et plockar då fram den informationen från trafikföretagets servrar och skickar tillbaka tidtabellen till din reseapp som då kan visa när bussen går från din hållplats och hur lång tid resan kommer att ta.</p>


            <h2>Varför vill man använda ett API?</h2>
            <h3>Tillgängliggör data</h3>
            <p>Med hjälp av API:er kan man på ett enkelt sätt få tillgång till data. Tidigare behövde man kanske ringa till en verksamhet för att få ut deras data, som då ofta kom i olika format, som gör det svårare att hitta den specifika informationen man är ute efter. Idag kan man oftast använda ett API istället för att ringa för att få ut data från en verksamhet, vilket är snabbare och smidigare för både dig som användare och verksamheten.</p>
            <h3>Automation och Effektivitet</h3>
            <p>Ett API gör det möjligt för oss att kunna hämta data automatiskt utan att blanda i andra personer då datorsystem utför arbetet åt oss människor. Detta gör att data kan delas och spridas enklare. Dessutom får man oftast färsk och uppdaterad data.</p>
            <h3>Främjar Innovation</h3>
            <p>Det sägs att information ska användas och inte enbart sparas, med hjälp av API:er kan innovativa produkter, mobila applikationer, och webbtjänster som underlättar och effektiviserar vardagar skapas.</p>
            <h3>Anpassningsbar</h3>
            <p>Med API:er kan användarna anpassa data så att man får endast det man behöver eller intresserad av. Det vill säga, istället för att leta igenom en stor datamängd efter den information man är ute efter, så kan API:er tillhandahålla endast den informationen man är ute efter. Datan kan även modifieras när som helst om så önskas.</p>
            <h3>Integration</h3>
            <p>API tillåter flera program ha tillgång till samma data samtidigt och låter olika system arbeta tillsammans. Tidigare behövde man ha långa möten och utveckla system för att få två system att prata med varandra. Säg att det då kommer ett tredje system som ska prata med dessa system, då måste man återigen upprepa den långa processen för att få det tredje systemet att prata med de andra systemen. För att komma runt det här problemet kan man använda sig av API:er. Det system som vill prata med ett annat system kan göra det via ett API, som också andra system kan använda sig av. På så sätt kan många fler system ta del av den datan.</p>
            <h3>Säkerhet</h3>
            <p>När man använder API:er på en webbplats så ökar säkerheten. Anledningen till det är för att du inte är direkt länkad till en server, utan du skickar förfrågningar till ett API istället. Du skickar en liten mängd information till API:et som i sin tur svarar med den information du frågat efter. Det minimerar risken att obehöriga kommer åt backend-delen av en server.</p>
        </section>
    </div>
    
<?php include('components/footer.inc.php')?>