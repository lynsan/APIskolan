<span class="highlight-keyword">
function</span> <span>sendSMS</span>($sms){
    $username = <span class="highlight-string">"USERNAME"</span>;
    $password = <span class="highlight-string">"PASSWORD"</span>;
    $context = stream_context_create(<span class="highlight-keyword">array</span>(
        <span class="highlight-string">'http'</span> => <span class="highlight-keyword">array</span>(
            <span class="highlight-string">'method'</span> => <span class="highlight-string">'POST'</span>,
            <span class="highlight-string">'header'</span>  => <span class="highlight-string">'Authorization: Basic '</span>.
                        base64_encode($username.':'.$password). <span class="highlight-string">"\r\n"</span>.
                        <span class="highlight-string">"Content-type: application/x-www-form-urlencoded\r\n"</span>,
            <span class="highlight-string">'content'</span> => http_build_query($sms),
            <span class="highlight-string">'timeout'</span> => 10
            )));
    $response = file_get_contents(<span class="highlight-string">"https://api.46elks.com/a1/sms"</span>,
        <span class="highlight-keyword">false</span>, $context);

    <span class="highlight-keyword">if</span> (!strstr($http_response_header[0],<span class="highlight-string">"200 OK"</span>))
        <span class="highlight-keyword">return</span> $http_response_header[0];
    <span class="highlight-keyword">return</span> $response;
}

$sms = <span class="highlight-keyword">array</span>(
    <span class="highlight-string">"from"</span> => <span class="highlight-string">"<code contenteditable="true" name="OutputSender" class="editable" oninput="updateSenderInput(this)">PHPElk</code>"</span>,   /* Can be up to 11 alphanumeric characters */
    <span class="highlight-string">"to"</span> => <span class="highlight-string">"+<code contenteditable="true" name="OutputRecipient" class="editable" oninput="updateRecipientInput(this)">46766861004</code>"</span>,  /* The mobile number you want to send to */
    <span class="highlight-string">"message"</span> => <span class="highlight-string">"<code contenteditable="true" name="OutputMessage" class="editable" oninput="updateMessageInput(this)">Bring a sweater, it's cold outside!</code>"</span>,
);
<span class="highlight-keyword">
echo</span> sendSMS($sms);