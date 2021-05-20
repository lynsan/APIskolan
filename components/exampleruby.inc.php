<span class="highlight-keyword">
require</span> <span class="highlight-string">'net/http'</span>

uri = URI(<span class="highlight-string">'https://api.46elks.com/a1/sms'</span>)
req = Net::HTTP::Post.new(uri)
req.basic_auth <span class="highlight-string">'&lt;API Username&gt;'</span>,  <span class="highlight-string">'&lt;API Password&gt;'</span>
req.set_form_data(
    <span class="highlight-builtIn">:from</span> => <span class="highlight-string">'<code contenteditable="true" name="OutputSender" class="editable" oninput="updateSenderInput(this)">Tshirt</code>'</span>,
    <span class="highlight-builtIn">:to</span> => <span class="highlight-string">'+<code contenteditable="true" name="OutputRecipient" class="editable" oninput="updateRecipientInput(this)">46766868334</code>'</span>,
    <span class="highlight-builtIn">:message</span> => <span class="highlight-string">'<code contenteditable="true" name="OutputMessage" class="editable" oninput="updateMessageInput(this)">Jag testar APIskolan och skulle gärna vilja ha en kurvig T-shirt i storlek L, tack!</code>'</span>
)

res = Net::HTTP.start(
        uri.host,
        uri.port,
        <span class="highlight-builtIn">:use_ssl</span> => uri.scheme == <span class="highlight-builtIn">'https'</span>) <span class="highlight-keyword">do</span> |http|
    http.request req
<span class="highlight-keyword">end</span>

puts res.body