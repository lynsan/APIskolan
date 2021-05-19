<?php $page = 'terminology';require('components/header.inc.php')?>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <h1>Terminologi som är bra att ha koll på</h1>
            <p><b>HTTP -</b> Hypertext Transfer Protocol eller HTTP är ett protokoll som används för att din webbläsare ska kunna hämta innehåll från en annan dator över internet. Med hjälp av HTTP kan alltså din webbläsare kommunicera med en server och läsa in innehållet på en webbplats.</p>
            <br>
            <p><b>URL -</b> När du besöker en webbplats så använder du dig av en URL. Det står för Uniform Resource Locator, och kallas även för internetadress. URL är en unik adress/sökväg till webbplats, till exempel http://www.digg.se. Många API:er har också en URL, till exempel https://api.46elks.com/a1/.</p>
            <br>
            <p><b>Request -</b> När man använder ett API, eller går in på en webbplats så skickas det en request eller förfrågan till servern som API:et eller webbplatsen ligger på. Vad man frågar efter kan variera, men kan exempelvis vara om att få se innehållet på en webbplats.</p>
            <br>
            <p><b>Response -</b> Efter att man har skickat en request till en webbserver så får man i sin tur ett svar tillbaka, en response. Vad det är för svar kan variera, exempelvis kan du skicka en frågan “Hej APIskolan, kan jag få se den här webbsidan?” och den response du då får är “Javisst kan du det, så här ser den här webbsidan ut”, vilket gör att du kan visa allt innehåll som du ser nu.</p>
            <br>
            <p><b>HTTP Statuskoder -</b> När din webbläsare skickar en förfrågan till en webbserver så får du tillbaka ett svar, som alltid innehåller en statuskod. Detta är för att indikera hur din förfrågan har gått. Exempelvis så kan du få statuskoden “200 OK” som visar på att allt har gått bra, eller så kanske du får svaret “404 Not Found” som säger att webbplatsen inte hittades. Det finns många olika statuskoder, och här kan du läsa mer om vilka koder som finns. <a href="https://sv.wikipedia.org/wiki/Lista_%C3%B6ver_HTTP-statuskoder">Läs mer om HTTP-statuskoder från Wikipedia</a>.</p>   
            <h3>HTTP Metoder</h3>
            <p><b>GET -</b> När du vill till exempel be om en viss fil eller bild från internet så använder din webbläsare denna metod, vilket är det vanligaste HTTP-kommandot.</p>
            <br>
            <p><b>POST -</b> Din webbläsare använder denna metod om du vill du skicka eller ladda upp en information på internet.</p>
            <br>
            <p><b>DELETE -</b> Har du ångrat dig och vill ta bort den informationen som du har laddat upp så tar din webbläsare hjälp av den här metoden.</p>
            <h3>Authentication</h3>
            <p><b>Credentials -</b> Vissa som tillhandahåller API:er vill ha lite bättre koll på vilka som använder deras API, av olika anledningar. Det gör att man ibland behöver skapa ett konto för att använda tjänsten. Exempelvis så skapar man ett konto hos 46elks, för att kunna använda deras API. När man väl har sitt konto hos dom får man ett användarnamn och lösenord till själva API:et. Detta är dina credentials, som du behöver för att kunna använda API:et. Det kan beskrivas som din unika identifikation, så att 46elks kan få bättre kontroll över vem som använder deras tjänst.</p>
            <br>
            <p><b>API keys -</b> Vissa använder så kallade API keys för att kontrollera användningen av API:et. Då använder man inte ett användarnamn och lösenord för att autentisera sig, utan man använder en enda nyckel.</p>
            <h3>Format (json, xml, other)</h3>
            <p>Beroende på hur ett API är uppbyggt kan deras responses eller svar se olika ut. De vanligaste formaten som data skickas med är json och xml.</p>
            <br>
            <p><b>JSON</b></p>
            <p>Här är ett exempel på hur json-kod kan se ut:</p>    
            <br> 
            <code>{ key: "value", message: "Hello World!"}</code>
            <br>
            <br>
            <br>
            <p><b>XLM</b></p>
            <p>Här är ett exempel på hur xml-kod kan se ut:</p>
            <br>
            <code>&lt;key&gt;value&lt;/key&gt;, &lt;message&gt;Hello World!&lt;/message&gt;</code>
        </section>
    </div>

<?php include('components/footer.inc.php')?>