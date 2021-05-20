
import com.mashape.unirest.http.HttpResponse;
import com.mashape.unirest.http.Unirest;
        
<span class="highlight-keyword">
public class</span><span class="highlight-title"> UnirestSendSMS </span>{
    <span class="highlight-keyword">public static void</span> <span class="highlight-title">main</span> (String[] args) {
        <span class="highlight-keyword">try</span> {
            System<span class="highlight-keyword">.out.</span>println(<span class="highlight-string">"Sending SMS"</span>);
                    
            HttpResponse response = Unirest.post(<span class="highlight-string">"https://api.46elks.com/a1/sms"</span>)
                .basicAuth(<span class="highlight-string">"API Username"</span>,<span class="highlight-string">"API Password"</span>)
                .field(<span class="highlight-string">"to"</span>, <span class="highlight-string">"+<code contenteditable="true" name="OutputRecipient" class="editable" oninput="updateRecipientInput(this)">46766868334</code>"</span>)
                .field(<span class="highlight-string">"from"</span>, <span class="highlight-string">"<code contenteditable="true" name="OutputSender" class="editable" oninput="updateSenderInput(this)">Tshirt</code>"</span>)
                .field(<span class="highlight-string">"message"</span>, <span class="highlight-string">"<code contenteditable="true" name="OutputMessage" class="editable" oninput="updateMessageInput(this)">Jag testar APIskolan och skulle gärna vilja ha en kurvig T-shirt i storlek L, tack!</code>"</span>)
                .asString();

            System<span class="highlight-keyword">.out.</span>println(response.getBody());
            }
        
        <span class="highlight-keyword">catch</span> (Exception e) {
                System<span class="highlight-keyword">.out.</span>println(e);
            }
        }
    }