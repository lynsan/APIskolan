
import com.mashape.unirest.http.HttpResponse;
import com.mashape.unirest.http.Unirest;
        
<span class="highlight-keyword">
public class</span><span class="highlight-string"> UnirestSendSMS </span>{
    <span class="highlight-keyword">public static void</span> <span class="highlight-string">main</span>(String[] args){
        <span class="highlight-keyword">try</span>{
            System.out.println(<span class="highlight-string">"Sending SMS"</span>);
                    
            HttpResponse response = Unirest.post(<span class="highlight-string">"https://api.46elks.com/a1/sms"</span>)
                .basicAuth(<span class="highlight-string">"API Username"</span>,<span class="highlight-string">"API Password"</span>)
                .field(<span class="highlight-string">"to"</span>,<span class="highlight-string">"+<code contenteditable="true" name="OutputRecipient" class="editable" oninput="updateRecipientInput(this)">46766861004</code>"</span>)
                .field(<span class="highlight-string">"from"</span>,<span class="highlight-string">"<code contenteditable="true" name="OutputSender" class="editable" oninput="updateSenderInput(this)">JavaElk</code>"</span>)
                .field(<span class="highlight-string">"message"</span>,<span class="highlight-string">"<code contenteditable="true" name="OutputMessage" class="editable" oninput="updateMessageInput(this)">Bring a sweater, it's cold outside!</code>"</span>)
                .asString();

            System.out.println(response.getBody());
            }
        
        <span class="highlight-keyword">catch</span>(Exception e){
                System.out.println(e);
            }
        }
    }