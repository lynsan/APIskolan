<?php $page = 'kodexempel';require('components/header.inc.php')?>

<div class="main-content" onclick="hideMenu()">
    <section>
        <div class="tab">
            <button class="tablinks" onclick="openCodeExample(event, 'PHP')" id="defaultCodeExample">PHP</button>
            <button class="tablinks" onclick="openCodeExample(event, 'JavaScript')">JavaScript</button>
            <button class="tablinks" onclick="openCodeExample(event, 'Python')">Python</button>
            <button class="tablinks" onclick="openCodeExample(event, 'Java')">Java</button>
            <button class="tablinks" onclick="openCodeExample(event, 'Ruby')">Ruby</button>
        </div>
        <div id="PHP" class="tabcontent">
            <pre>
                <code contenteditable="false">
                insert PHP code here
                </code>
            </pre>
        </div>
        <div id="JavaScript" class="tabcontent">
            <pre>
                <code>
                insert JavaScript code here
                </code>
            </pre>
        </div>
        <div id="Python" class="tabcontent">
            <pre>
                <code>
                inset Python code here
                </code>
            </pre>
        </div>
        <div id="Java" class="tabcontent">
            <pre>
                <code>
                insert Java code here
                </code>
            </pre>
        </div>
        <div id="Ruby" class="tabcontent">
            <pre>
                <code>
                insert Ruby code here
                </code>
            </pre>
        </div>
    </section>
</div>

<?php include('components/footer.inc.php')?>