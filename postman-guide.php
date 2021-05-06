<?php $page = 'postman-guide';require('components/header.inc.php')?>

    <div class="main-content" onclick="hide_menu()">
        <section>
            <h1>Hur använder man ett API?</h1>
            <p>💻 <- Indikerar en uppgift</p>
            <p>💡 <- Indikerar en information</p>
            <p>🤩 <- Indikerar att det händer coola saker</p>
            <h3>Testa API:er i Postman</h3>
            <p>Du kan testa olika API:er i verktyget Postman. Det är en mjukvara som du kan använda för att testa API:er, vilket är ett bra verktyg att använda när du lär dig om API.</p>
            <br>
            <!-- Guide för att installera och öppna Postman -->
            <p>💻Installera Postman</p>
            <br>
            <p>1. Besök https://www.postman.com/downloads/</p>
            <p>2. Under “Download Postman” kan du klicka på “Download the App” om du har Windows operativsystem, annars längre ner där det står “Not your OS?” kan du välja att klicka den som matchar ditt operativsystem:</p>
            <img class="postman-guide-img vertical" src="images/01-postman-download.jpg" alt="">
            <p>💻Öppna appen Postman</p>
            <br>
            <p>💻Klicka på “Skip and go to the app” längst ner i sidan om du inte vill göra ett konto på en gång:</p>
            <img class="postman-guide-img vertical" src="images/02-postman-welcome.jpg" alt="">
            <p>💻Klicka på “+” bredvid  “Overview x” för att kunna börja testa API:er i Postman:</p>
            <img class="postman-guide-img horizontal"  src="images/03-postman-yourein.jpg" alt="">
            <!-- Guide för att testa en URL i Postman -->
            <h3>Testa en URL i Postman</h3>
            <p>Vi börjar med att hämta URL:en från svts webbplats. Vad är URL för något? Jo, det är adressen till webbplats, som är i detta fall https://www.svt.se/.</p>
            <br>
            <p>💻Gå till Postman och skriv svts URL:en i rutan där det står “Enter request URL”:</p>
            <img class="postman-guide-img horizontal smallImg" src="images/04-svt-url.jpg" alt="">
            <p>💡Bredvid URL:en står det “GET”, vad innebär det? Jo, GET är en metod som tillåter dig att göra en förfrågan för att hämta data.</p>
            <br>
            <p>💻Klicka på den blåa knappen “Send”:</p>
            <img class="postman-guide-img horizontal" src="images/05-svt-url-send.jpg" alt="">
            <p>🤩Nu har det hänt saker. Du har gjort en förfrågan om du får komma in hos svt.se på internet och fått ett svar tillbaka:</p>
            <img class="postman-guide-img horizontal" src="images/06-svt-url-result.jpg" alt="">
            <p>💻Öppna en webbläsare och besök https://www.svt.se/.</p>
            <br>
            <p>💻Högerklicka och välj “View page source”, “Visa sidans källa” eller något i den stilen.</p>
            <br>
            <p>🤩Ser du att den visar samma svar som det visas i POSTMAN när du har gjort en förfrågan? Webbläsare får alltså samma svar som den i sin tur tolkar och visar ute på internet. Det är samma sak med API:er, många av de finns ute på internet, du behöver dock veta deras URL för att kunna kommunicera med dem.</p>
            <!-- Guide för att testa ett riktigt API i Postman -->
            <h3>Testa ett riktigt API i Postman</h3>
            <p>Vi använder oss av Postman för att kommunicera med 46elks API. Med hjälp av 46elks API kan du skicka ett SMS. Du har kanske fått en påminnelse om tandläkartid förut? Det är genom att använda ett API som man kan automatisera ett sånt SMS.</p>
            <br>
            <p>För att kunna använda 46elks API behöver vi en URL.</p>
            <br>
            <p>💻Besök webbplatsen 46elks.se</p>
            <br>
            <p>💻Klicka sedan på “Dokumentation” i menyn. Där hittar du bland annat URL:en för att skicka SMS med deras API.</p>
            <br>
            <p>💻Skriv URL:en https://api.46elks.com/a1/ i rutan där det står “Enter request URL”:</p>
            <img class="postman-guide-img horizontal" src="images/07-46elks-write-url.jpg" alt="">
            <p>💻Klicka sedan på “Send”:</p>
            <img class="postman-guide-img horizontal" src="images/08-46elks-send.jpg" alt="">
            <p>💡Du fick förmodligen ett svar som säger “API access requires Basic HTTP authentication. Read documentation or examples.”:</p>
            <img class="postman-guide-img horizontal" src="images/09-46elks-need-to-authenticate.jpg" alt="">
            <p>Detta innebär att du måste autentisera dig. Du behöver alltså en nyckel för att komma åt API:et.</p>
            <br>
            <p>Hur får man den nyckeln då? För att kunna autentisera dig behöver du vanligtvis skapa ett konto hos tjänsten, vilken i detta fall är 46elks. När du skapar ett konto får du oftast ett användarnamn och lösenord som du kan använda för att autentisera dig, dessa kallas också ibland för “API-nycklar”.</p>
            <br>
            <p>Såhär gör du för att få ett användarnamn och lösenord till API:et:</p>
            <br>
            <p>💻Skapa ett konto hos 46elks. Du behöver ha din telefon nära till hands då du kommer att få ett SMS för att bekräfta att du är en människa och inte robot.</p>
            <br>
            <p>💡Under “API Credentials” hittar du ditt API användarnamn (username) och lösenord (password):</p>
            <img class="postman-guide-img horizontal" src="images/10-46elks-api-credentials.jpg" alt="">
            <p>💻Gå tillbaka till POSTMAN för att skicka användarnamnet och lösenordet. Det gör du under “Authorization” där du ändrar vad som står i type-rutan till “Basic Auth”:</p>
            <img class="postman-guide-img" src="images/11-46elks-change-to-basic-auth.jpg" alt="">
            <p>Fyll i sedan ditt API användarnamn och lösenord och klicka på den blåa knappen “Send”:</p>
            <img class="postman-guide-img horizontal" src="images/12-46elks-fill-in-credentials.jpg" alt="">
            <p>🤩Nu är du inne!:</p>
            <img class="postman-guide-img horizontal" src="images/13-46elks-yourein.jpg" alt="">
            <p>💻Testa att lägga till me i slutet av URL:en. Så här kommer URL:en att se ut nu: https://api.46elks.com/a1/me Vad får du för svar? Det du la till i slutet av URL:en kallas för endpoint. Läs om endpoint här.</p>
            <br>
            <p>💻Testa att skicka SMS till dig själv. Det gör du genom att först ändra anropet från GET till POST:</p>
            <img class="postman-guide-img" src="images/14-46elks-get-to-post.jpg" alt="">
            <p>💡Nu vet du vad GET är för någonting, men du kanske undrar vad är POST för något? POST är också en metod, dock det används när du vill skicka med data.</p>
            <br>
            <p>💻Ändra sedan endpointen i URL:en till sms. URL:en borde se ut såhär: https://api.46elks.com/a1/sms.</p>
            <br>
            <p>💻Klicka på “Body” och ändra formatet till x-www-form-urlencoded. Detta format beskriver formulärdata som skickas i ett enda block i HTTP-meddelandetexten:</p>
            <img class="postman-guide-img horizontal" src="images/15-46elks-body-format.jpg" alt="">
            <p>💻Fyll i key och value med data såsom varifrån SMS:et kommer, till vilket nummer det ska skickas och meddelandet som ska skickas:</p>
            <img class="postman-guide-img horizontal" src="images/16-46elks-key&value.jpg" alt="">
            <p>💻Klicka på “Send”.</p>
            <br>
            <p>🤩Nu har du kommunicerat med ett riktigt API!</p>
        </section>
    </div>
    
<?php include('components/footer.inc.php')?>