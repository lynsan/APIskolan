<?php $page = 'code-examples';require('components/header.inc.php')?>

<script type="text/javascript" src="styles/codeexamples.js"></script>

<div class="main-content" onclick="hideMenu()">
    <section>
        <div class="text">
            <h1>Kodexempel</h1>
            <p>Här kan du se hur själva koden kan se ut när du gör ett API anrop! Testa skriva in ett eget meddelande med avsändare och mottagare. Se var det ändras i koden nedanför i de olika programmeringsspråken. Du kan även ändra mottagare, avsändare och meddelande direkt i koden.</p>
            <br>
            <p>Testa att skicka ett sms till dig själv! Du kan kopiera koden, klistra den in i ditt eget projekt, och köra koden.</p>
            <br>
            <br>
            <p><i><b>Tips!</b> Om du skickar ett sms till telefonnumret +46766868334 med avsändaren "Tshirt" så kan du få en T-shirt hemskickad med 46elks logga på! Skriv i meddelandet vilken storlek du vill ha, och om du vill ha en rak eller kurvig T-shirt.</i></p>
            <br>
            <br>

            <form action="">
                <label id="recipient" for="InputRecipient">Mottagare</label> 
                <input name="InputRecipitent" type="text" id="InputRecipient" oninput="updateRecipient()" placeholder="0766868334">

                <label for="InputSender">Avsändare</label>
                <input name="InputSender" type="text" id="InputSender" oninput="updateSender()" maxlength="11" placeholder="Tshirt">

                <label for="InputMessage">Meddelande</label>
                <textarea name="InputMessage" id="InputMessage" cols="30" rows="10" oninput="updateMessage()" placeholder="Jag testar APIskolan och skulle gärna vilja ha en kurvig T-shirt i storlek L, tack!"></textarea>
            </form>
            <br>
        </div>



        <div class="tab">
            <button class="tablinks defaultOpen" onclick="openCodeExample(event, 'PHP')">PHP</button>
            <button class="tablinks" onclick="openCodeExample(event, 'JavaScript')">JavaScript</button>
            <button class="tablinks" onclick="openCodeExample(event, 'Python')">Python</button>
            <button class="tablinks" onclick="openCodeExample(event, 'Java')">Java</button>
            <button class="tablinks" onclick="openCodeExample(event, 'Ruby')">Ruby</button>
        </div>
        <div id="PHP" class="tabcontent">
            <pre>
                <code contenteditable="false">                 
                    <?php include('components/examplephp.inc.php')?>
                </code>
            </pre>
        </div>
        <div id="JavaScript" class="tabcontent">
            <pre>
                <code>
                    <?php include('components/examplejavascript.inc.php')?>
                </code>
            </pre>
        </div>
        <div id="Python" class="tabcontent">
            <pre>
                <code>
                    <?php include('components/examplepython.inc.php')?>
                </code>
            </pre>
        </div>
        <div id="Java" class="tabcontent">
            <pre>
                <code>
                    <?php include('components/examplejava.inc.php')?>
                </code>
            </pre>
        </div>
        <div id="Ruby" class="tabcontent">
            <pre>
                <code>              
                    <?php include('components/exampleruby.inc.php')?>
                </code>
            </pre>
        </div>
        <div class="text">
            <br>
            <p>Nu har du lärt dig massor om API:er! Du kan testa dina kunskaper i nästa kapitel.</p>
        </div>
        <div class="nav-buttons">
            <button type="button" onclick="location.href='postman-guide.php';">Föregående</button>
            <button type="button" onclick="location.href='test-your-knowledge.php';">Nästa</button>
        </div>
    </section>
</div>

<?php include('components/footer.inc.php')?>