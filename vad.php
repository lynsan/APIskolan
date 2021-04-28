<?php $page = 'vad';require('components/header.inc.php')?>

    <div class="main-content" onclick="hide_menu()">
        <section>
            <h1>Vad är ett API?</h1>
            <p>Application Program Interface förkortas API är ett begrepp som är vanligt att höra inom programmering. Men vad är API för något? Det kan beskrivas som ett sätt att hämta och skicka data.</p>
            <div class="callout">
                <p>API fungerar som en bro för att program, system och applikationer ska kunna kommunicera mellan varandra på ett enkelt sätt.</p>
            </div>
            <img class="exampleImg"src="images/APItidtabellexempel.svg" alt="">
            <p>Lisa ska åka och hälsa på en kompis, men hon vet inte när bussen går. För att räkna ut när hon ska gå hemifrån tar hon fram sin telefon där hon har en reseapp som kan hjälpa Lisa att planera sin resa. Hon skriver in vilken station hon ska åka från, till och när hon vill vara framme. Det som händer då är att reseappen skickar en fråga till ett API som sin tur hämtar just den informationen från trafikföretagets servrar. Därefter skickar API:et tillbaka den information som reseappen har frågat efter. Reseappen kan då visa när bussen går från Lisas station.</p>
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