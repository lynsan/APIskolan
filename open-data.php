<?php $page = 'open-data';require('components/header.inc.php')?>

    <div class="main-content" onclick="hideMenu()">
        <section>
        <div class="text">
            <h1>Öppna data</h1>
            <p>Innan vi går in på vad ett API är, kan det vara bra att veta vad öppna data är, då API:er och öppna data är begrepp som många gånger går hand i hand. Så vad är då öppna data?</p>
            <br>
            <p>Öppna data är fritt tillgängliga datamängder som går att använda i den utsträckning som är möjligt. Den är i sin tur maskinläsbar, det vill säga gjort för datorer och system att använda. I Sverige samlas in, reproduceras och sprids öppna data av bland annat myndigheter som till exempel Skatteverket, Polisen, Naturvårdsverket, Trafikverket och SCB. För att ta del av denna data var man förr tvungen att ringa till dessa myndigheter. Det utvecklades även till att det finns en webbplats där man kan ladda ner en hel del data som man vill ta del av i till exempel CSV-fil eller en tabell. Men idag, med hjälp av API:er kan man få tillgång till det enkelt digitalt och automatiserat.</p>
            <br>
            <p>När du går och hämtar öppna data på myndighetens webbplats så får du all data, så du får själv rota igenom all data efter just den informationen du är ute efter. Om du behöver ha färska siffror och uppdaterad data, ja då får du gå tillbaka till webbplatsen med jämna mellanrum och hämta det senaste versionen av datan. Om du nu istället använder dig av ett API så kan du be om endast de specifika data du är ute efter, och du får alltid den senaste datan.</p>
            <div class="callout">
                <p>Genom att använda API:er kan man ta del av öppna data för att dra nytta av viktig information, vilket ger en ökad kunskap om samhället och offentliga organisationer. Dessutom skapar det möjligheten att utveckla innovativa tjänster och produkter.</p>
            </div>
            <p>I nästa kapitel så beskriver vi närmare om vad ett API är och hur det fungerar.</p>
        </div>
            <div class="nav-buttons">
                <button type="button" onclick="location.href='index.php';"><i class="fas fa-chevron-left previousChapter-icon"></i>Föregående</button>
                <button type="button" onclick="location.href='what-is-apis.php';">Nästa<i class="fas fa-chevron-right nextChapter-icon"></i></button>
            </div>
        </section>
    </div>

<?php include('components/footer.inc.php')?>