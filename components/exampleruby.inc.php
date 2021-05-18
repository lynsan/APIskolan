<span class="highlight-keyword">
require</span> <span class="highlight-string">'net/http'</span>

uri = URI(<span class="highlight-string">'https://api.46elks.com/a1/sms'</span>)
req = Net::HTTP::Post.new(uri)
req.basic_auth <span class="highlight-string">'&lt;API Username&gt;'</span>, <span class="highlight-string">'&lt;API Password&gt;'</span>
req.set_form_data(
    :from => <span class="highlight-string">'<code contenteditable="true" name="OutputSender" class="editable" oninput="updateSenderInput(this)">RubyElk</code>'</span>,
    :to => <span class="highlight-string">'+<code contenteditable="true" name="OutputRecipient" class="editable" oninput="updateRecipientInput(this)">46766861004</code>'</span>,
    :message => <span class="highlight-string">'<code contenteditable="true" name="OutputMessage" class="editable" oninput="updateMessageInput(this)">Bring a sweater, it's cold outside!</code>'</span>
)

res = Net::HTTP.start(
        uri.host,
        uri.port,
        :use_ssl => uri.scheme == 'https') <span class="highlight-keyword">do</span> |http|
    http.request req
<span class="highlight-keyword">end</span>

puts res.body