<?php $page = 'postman-testURL';require('components/header.inc.php')?>
<script type="text/javascript" src="javascript/checkmarks.js"></script>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <div class="text">
                <h1>API i Postman</h1>
                <p>Nu ska vi lära oss om hur man faktiskt använder ett API! Postman är en mjukvara som du kan använda för att testa API:er, vilket är ett bra verktyg att använda när du lär dig om API:er. I den här guiden visar vi hur man kan anropa en webbplats, och även hur man kan anropa ett riktigt API. När du ser denna ikon 💡 så indikerar det information. Du kan bocka av det steget som du gjort för att lättare se var du befinner dig i guiden.</p>
                <br>
                <br>
                <!-- Guide för att installera och öppna Postman -->
                <h3>Installera Postman</h3>
                <input type="checkbox"><p>1. Besök <a href="https://www.postman.com/downloads/" target="_blank" rel="noopener noreferrer">https://www.postman.com/downloads/</a></p>
                <br>
                <br>
                <input type="checkbox" onclick="toggleNextImg(this)"><p>2. Under “Download Postman” kan du klicka på “Download the App”. Postman känner av vilket operativsystem som du har, vilket du kan se på ikonen på nedladdningsknappen. Om ikonen inte stämmer överens med ditt operativsystem finns det länkar längre ner där det står “Not your OS?”. Där kan du välja att klicka den som matchar ditt operativsystem.</p>
            </div>
            <img class="postman-guide-img vertical step2" src="images/01-postman-download.jpg" alt="Download Postman">
            <div class="text">
            <input type="checkbox" onclick="toggleNextImg(this)"><p>3. Installera och öppna appen POSTMAN. Så här kan det se ut för dig när du öppnar den. Klicka på “Skip and go to the app” längst ner på sidan om du inte vill göra ett konto på en gång.</p>          
            </div>
            <img class="postman-guide-img vertical" src="images/02-postman-welcome.jpg" alt="Welcome To Postman">
            <div class="text">
                <br>
                <input type="checkbox" onclick="toggleNextImg(this)"><p>4. Ungefär såhär ser det kanske ut för dig nu. Klicka på “+” bredvid  “Overview” för att kunna börja använda POSTMAN.</p>
            </div>
            <img class="postman-guide-img horizontal"  src="images/03-postman-yourein.jpg" alt="Postman Overview">
            <div class="text">
                <!-- Guide för att testa en URL i Postman -->
                <br>
                <h3>Testa en URL i Postman</h3>
                <p>Innan vi testar ett riktigt API, ska vi börja med att anropa en webbplats. Vi börjar med att hämta URL:en från svts webbplats.</p>
                <p class="callout">💡 En <a href="terminology.php">URL</a> är adressen till en webbplats, som är i detta fall <b>https://www.svt.se/</b>.</p>
                <br>
                <input type="checkbox" onclick="toggleNextImg(this)"><p>1. Skriv svts URL i rutan där det står “Enter request URL”. Såhär ska det se ut i POSTMAN:</p>
            </div>
            <img class="postman-guide-img horizontal smallImg" src="images/04-svt-url.jpg" alt="Svt URL">
            <div class="text">
                <p class="callout">💡 Bredvid URL:en står det “GET”. <a href="terminology.php">GET</a> är en metod som tillåter dig att göra en förfrågan för att hämta data.</p>
                <br>
                <input type="checkbox" onclick="toggleNextImg(this)"><p>2. Klicka på den blåa knappen “Send”.</p>
            </div>
            <img class="postman-guide-img horizontal" src="images/05-svt-url-send.jpg" alt="Send Button">
            <div class="text">
                <p class="step3url-p">Nu har det hänt saker. Du har gjort en förfrågan om du får komma in hos svt.se på internet och fått ett svar tillbaka.</p>
            </div>
            <img class="postman-guide-img horizontal step3url-img" src="images/06-svt-url-result.jpg" alt="Svt URL Result">
            <div class="text">
                <input type="checkbox" onclick="toggleStep3url(this)"><p>3. Besök <a href="https://www.svt.se/" target="_blank" rel="noopener noreferrer">https://www.svt.se/</a>. Därefter högerklicka i webbläsaren och välj “View page source”, “Visa sidans källa” eller något i den stilen.</p>
                <br>
                <br>
                <p class="step3url-p">Du kan se att din webbläsare visar samma svar som du fick i Postman. Webbläsare får alltså samma svar, som den i sin tur tolkar, och visar ute på internet. Det är samma sak med många API:er, många av de finns ute på internet, du behöver dock veta deras URL för att kunna kommunicera med dem.</p>
            </div>
            <div class="nav-buttons">
                <button type="button" onclick="location.href='why-use-apis.php';"><i class="fas fa-chevron-left previousChapter-icon"></i>Föregående</button>
                <button type="button" onclick="location.href='postman-testAPI.php';">Nästa<i class="fas fa-chevron-right nextChapter-icon"></i></button>
            </div>
        </section>
    </div>
    
<?php include('components/footer.inc.php')?>