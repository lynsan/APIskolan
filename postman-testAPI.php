<?php $page = 'postman-testAPI';require('components/header.inc.php')?>
<script type="text/javascript" src="javascript/checkmarks.js"></script>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <!-- Guide för att testa ett riktigt API i Postman -->
        <div class="text">
            <br>
            <br>
            <h3>Testa ett riktigt API i Postman</h3>
            <p class="step1api-p">Nu ska vi testa att anropa ett riktigt API! Vi använder oss av Postman för att kommunicera med 46elks API. Med hjälp av 46elks API ska du nu skicka ett SMS till dig själv. Du har kanske fått en påminnelse om tandläkartid förut? Det är genom att använda ett API som man kan automatisera ett sånt SMS.</p>
            <br>
            <p class="step1api-p">För att kunna använda 46elks API behöver vi en URL(adress).</p>
            <br>
            <input type="checkbox" onclick="toggleStep1api(this)"><p>1. Skriv URL:en <b class="step1api-url">https://api.46elks.com/a1/</b> i rutan där det står “Enter request URL”.</p>
        </div>
        <img class="postman-guide-img horizontal" src="images/07-46elks-write-url.jpg" alt="46elks URL">
        <div class="text">
            <input type="checkbox" onclick="toggleNextImg(this)"><p>2. Klicka sedan på “Send”.</p>
        </div>
        <img class="postman-guide-img horizontal" src="images/08-46elks-send.jpg" alt="Send Button">
        <div class="text">
            <p class="step3api-p"> Du fick förmodligen ett svar som säger “API access requires Basic HTTP authentication. Read documentation or examples.”</p>
        </div>
        <img class="postman-guide-img horizontal step3api-img" src="images/09-46elks-need-to-authenticate.jpg" alt="Authenticate">
        <div class="text">
            <p class="step3api-p">Detta innebär att du måste autentisera dig. Du behöver alltså en nyckel för att komma åt API:et.</p>
            <br>
            <p class="callout">💡 För att kunna autentisera dig behöver du skapa ett konto hos 46elks. När du skapar ett konto får du ett API användarnamn och lösenord som du kan använda för att autentisera dig, dessa kallas också ibland för “<a href="terminology.php">API-keys</a>”.</p>
            <br>
            <input type="checkbox" onclick="toggleStep3api(this)"><p>3. Skapa ett konto hos <a href="https://46elks.se/register" target="_blank" rel="noopener noreferrer">46elks</a> för att få ett användarnamn och lösenord till API:et. Du behöver ha din telefon nära till hands då du kommer att få ett telefonsamtal för att bekräfta att du är en människa och inte robot.</p>
            <br>
            <br>
            <p class="step4api-p">Nu när du har skapat ditt konto och loggat in hos 46elks så kan du i deras webbplats hitta ditt API användarnamn (username) och lösenord (password) under “API Credentials”.</p>
        </div>
        <img class="postman-guide-img horizontal step4api-img" src="images/10-46elks-api-credentials.jpg" alt="API Credentials">
        <div class="text">
            <input type="checkbox" onclick="toggleStep4api(this)"><p>4. Gå tillbaka till Postman för att autentisera dig. Det gör du under “Authorization” eller "Auth" där du ändrar vad som står i type-rutan till “Basic Auth”.</p>
        </div>
        <img class="postman-guide-img" src="images/11-46elks-change-to-basic-auth.jpg" alt="Basic Auth">
        <div class="text">
            <input type="checkbox" onclick="toggleNextImg(this)"><p>5. Fyll i sedan ditt API användarnamn och lösenord och klicka på den blåa knappen “Send”.</p>
        </div>
        <img class="postman-guide-img horizontal" src="images/12-46elks-fill-in-credentials.jpg" alt="Fill-in Credentials">
        <div class="text">
            <p class="step6api-p">Nu är du inne!</p>
        </div>
        <img class="postman-guide-img horizontal step6api-img" src="images/13-46elks-yourein.jpg" alt="46elks API Accessed">
        <div class="text">
            <input type="checkbox" onclick="toggleStep6api(this)"><p>6. I Postman, testa att lägga till <b class="step6api-url">me</b> i slutet av URL:en. Så här kommer URL:en att se ut efter du har gjort det: <b class="step6api-url">https://api.46elks.com/a1/me</b> Klicka sedan på “Send”. Vad får du för svar?</p>
            <br>
            <br>
            <br>
            <h3>Testa att skicka SMS</h3>
            <p>Nu ska du få testa att skicka SMS till dig själv med hjälp av 46elks API.</p>
            <br>
            <input type="checkbox" onclick="toggleNextImg(this)"><p>1. Ändra anropet från GET till POST i Postman.</p>
        </div>
        <img class="postman-guide-img" src="images/14-46elks-get-to-post.jpg" alt="Change To Post">
        <div class="text">
            <p class="callout">💡 <a href="terminology.php">POST</a> är precis som <a href="terminology.php">GET</a> också en metod, men det används när du vill skicka med data.</p>
            <br>
            <input type="checkbox" onclick="toggleStep2sms(this)"><p>2. Lägg till <b class="step2sms-url">sms</b> i slutet av din url. URL:en borde nu se ut såhär: <b class="step2sms-url">https://api.46elks.com/a1/sms</b>.</p>
            <br>
            <br>
            <input type="checkbox" onclick="toggleNextImg(this)"><p>3. Klicka på “Body” och ändra formatet till "x-www-form-urlencoded". Det är den formatet som 46elks använder för att skicka med data till sitt API, men det finns olika sätt.</p>
        </div>
        <img class="postman-guide-img horizontal" src="images/15-46elks-body-format.jpg" alt="Body Format">
        <div class="text">
        <input type="checkbox" onclick="toggleStep4sms(this)"><p>4. Fyll i “key” och “value” med information om avsändare, mottagare och meddelandet som ska skickas. “Key” innebär vad för slags information är det som läggs i value. “Value” är då informationen som man vill hämta eller skicka.</p>
            <br>
            <br>
            <p class="step4sms-p">I exemplet på bilden nedan har vi fyllt i “key” med <i>to</i>, <i>from</i> och <i>message</i>, “value” har fyllts i med <i>apiskolan</i> som avsändare (from), <i>+46712345678</i> som mottagare (to), och <i>"jag använder ett api för att skicka sms"</i> som meddelande (message).</p>
        </div>
        <img class="postman-guide-img horizontal step4sms-img" src="images/16-46elks-key&value.jpg" alt="Add Key & Value">
        <div class="text">
            <input type="checkbox"><p>5. Klicka på “Send”. Nu har du kommunicerat med ett riktigt API! I nästa kapitel får du se exempel på hur koden kan se ut när man anropar ett API.</p>
        </div>
        <div class="nav-buttons">
            <button type="button" onclick="location.href='postman-testURL.php';"><i class="fas fa-chevron-left previousChapter-icon"></i>Föregående</button>
            <button type="button" onclick="location.href='terminology.php';">Nästa<i class="fas fa-chevron-right nextChapter-icon"></i></button>
        </div>       
    </section>
</div>
    
<?php include('components/footer.inc.php')?>