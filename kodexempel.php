<?php $page = 'kodexempel';require('components/header.inc.php')?>

<script type="text/javascript" src="styles/codeexamples.js"></script>

<div class="main-content" onclick="hideMenu()">
    <section>

        Mottagare: <input type="text" id="InputRecipient" oninput="updateRecipient()">
        Avsändare: <input type="text" id="InputSender" oninput="updateSender()" maxlength="11">
        Meddelande: <input type="text" id="InputMessage" oninput="updateMessage()">


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