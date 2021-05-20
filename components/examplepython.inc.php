<span class="highlight-keyword">
import</span> requests

response = requests.post(
    <span class="highlight-string">'https://api.46elks.com/a1/sms'</span>,
    <span>auth</span> = (API_USERNAME, API_PASSWORD),
    <span>data</span> = {
        <span class="highlight-string">'from': '<code contenteditable="true" name="OutputSender" class="editable" oninput="updateSenderInput(this)">Tshirt</code>'</span>,
        <span class="highlight-string">'to': '+<code contenteditable="true" name="OutputRecipient" class="editable" oninput="updateRecipientInput(this)">46766868334</code>'</span>,
        <span class="highlight-string">'message': "<code contenteditable="true" name="OutputMessage" class="editable" oninput="updateMessageInput(this)">Jag testar APIskolan och skulle gärna vilja ha en kurvig T-shirt i storlek L, tack!</code>"</span>                        
    }
)
<span class="highlight-builtIn">print</span> (response.text)