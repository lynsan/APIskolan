<span class="highlight-keyword">
import</span> requests

response = requests.post(
    <span class="highlight-string">'https://api.46elks.com/a1/sms'</span>,
    <span>auth</span> = (API_USERNAME, API_PASSWORD),
    <span>data</span> = {
        <span class="highlight-string">'from': '<code contenteditable="true" name="OutputSender" class="editable" oninput="updateSenderInput(this)">PythonElk</code>'</span>,
        <span class="highlight-string">'to': '+<code contenteditable="true" name="OutputRecipient" class="editable" oninput="updateRecipientInput(this)">46766861004</code>'</span>,
        <span class="highlight-string">'message': "<code contenteditable="true" name="OutputMessage" class="editable" oninput="updateMessageInput(this)">Bring a sweater, it's cold outside!</code>"</span>                        
    }
)
<span class="highlight-builtIn">print</span> (response.text)