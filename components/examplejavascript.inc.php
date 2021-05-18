<span class="highlight-keyword">
const</span> https = <span class="highlight-builtIn">require</span>(<span class="highlight-string">'https'</span>)
<span class="highlight-keyword">const</span> querystring = <span class="highlight-builtIn">require</span>(<span class="highlight-string">'querystring'</span>)

<span class="highlight-keyword">const</span> username = <span class="highlight-string">'API-username'</span>
<span class="highlight-keyword">const</span> password = <span class="highlight-string">'API-password'</span>
<span class="highlight-keyword">const</span> postFields = {
    from:    <span class="highlight-string">"<code contenteditable="true" name="OutputSender" class="editable" oninput="updateSenderInput(this)">NodeElk</code>"</span>,
    to:      <span class="highlight-string">"+<code contenteditable="true" name="OutputRecipient" class="editable" oninput="updateRecipientInput(this)">46766861004</code>"</span>,
    message: <span class="highlight-string">"<code contenteditable="true" name="OutputMessage" class="editable" oninput="updateMessageInput(this)">Bring a sweater, it's cold outside!</code>"</span>
}

<span class="highlight-keyword">const</span> key = Buffer.from(username + ':' + password).toString(<span class="highlight-string">"base64"</span>);
<span class="highlight-keyword">const</span> postData = querystring.stringify(postFields)

<span class="highlight-keyword">const</span> options = {
    hostname: <span class="highlight-string">'api.46elks.com'</span>,
    path:     <span class="highlight-string">'/a1/SMS'</span>,
    method:   <span class="highlight-string">'POST'</span>,
    headers:  {
        <span class="highlight-string">'Authorization'</span>: <span class="highlight-string">'Basic '</span> + <span class="highlight-string">key</span>
    }
}

<span class="highlight-keyword">const</span> callback = (response) => {
    <span class="highlight-keyword">var</span> str = ''
    response.on(<span class="highlight-string">'data'</span>, (chunk) => {
        str += chunk
    })

    response.on(<span class="highlight-string">'end'</span>, () => {
        <span class="highlight-builtIn">console</span>.log(str)
    })
}

<span class="highlight-keyword">var</span> request = https.request(options, callback)
request.write(postData)
request.end()