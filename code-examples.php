<?php $page = 'code-examples';require('components/header.inc.php')?>

<script type="text/javascript" src="styles/codeexamples.js"></script>

<div class="main-content" onclick="hideMenu()">
    <section>

        
        <form action="">
            <label for="InputRecipient">Mottagare</label> 
            <input name="InputRecipitent" type="text" id="InputRecipient" oninput="updateRecipient()" value="0766868334">

            <label for="InputSender">Avsändare</label>
            <input name="InputSender" type="text" id="InputSender" oninput="updateSender()" maxlength="11" value="Tshirt">

            <label for="InputMessage">Meddelande</label>
            <textarea name="InputMessage" id="InputMessage" cols="30" rows="10" oninput="updateMessage()">Jag testar APIskolan och skulle gärna vilja ha en kurvig T-shirt i storlek L, tack!</textarea>
        </form>



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
        
    </section>
</div>

<?php include('components/footer.inc.php')?>