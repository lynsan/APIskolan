<?php $page = 'kodexempel';require('components/header.inc.php')?>

<div class="main-content" onclick="hideMenu()">
    <section>
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
                    
                    <span class="highlight-keyword">function</span> <span>sendSMS</span>($sms){
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
                        <span class="highlight-string">"from"</span> => <span class="highlight-string">"PHPElk"</span>,   /* Can be up to 11 alphanumeric characters */
                        <span class="highlight-string">"to"</span> => <span class="highlight-string">"+46766861004"</span>,  /* The mobile number you want to send to */
                        <span class="highlight-string">"message"</span> => <span class="highlight-string">"Bring a sweater, it's cold outside!"</span>,
                    );
                    <span class="highlight-keyword">echo</span> sendSMS($sms);
                </code>
            </pre>
        </div>
        <div id="JavaScript" class="tabcontent">
            <pre>
                <code>
                <span class="highlight-keyword">const</span> https = <span class="highlight-builtIn">require</span>(<span class="highlight-string">'https'</span>)
                <span class="highlight-keyword">const</span> querystring = <span class="highlight-builtIn">require</span>(<span class="highlight-string">'querystring'</span>)

                <span class="highlight-keyword">const</span> username = <span class="highlight-string">'API-username'</span>
                <span class="highlight-keyword">const</span> password = <span class="highlight-string">'API-password'</span>
                <span class="highlight-keyword">const</span> postFields = {
                from:    <span class="highlight-string">"NodeElk"</span>,
                to:      <span class="highlight-string">"+46766861004"</span>,
                message: <span class="highlight-string">"Bring a sweater it's cold outside!"</span>
                }

                <span class="highlight-keyword">const</span> key = Buffer.from(username + ':' + password).toString(<span class="highlight-string">"base64"</span>);
                const postData = querystring.stringify(postFields)

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
                </code>
            </pre>
        </div>
        <div id="Python" class="tabcontent">
            <pre>
                <code>
                    <span class="highlight-keyword">import</span> requests

                    response = requests.post(
                            <span class="highlight-string">'https://api.46elks.com/a1/sms'</span>,
                        <span>auth</span> = (API_USERNAME, API_PASSWORD),
                        <span>data</span> = {
                            <span class="highlight-string">'from': 'PythonElk'</span>,
                            <span class="highlight-string">'to': '+46766861004'</span>,
                            <span class="highlight-string">'message': "It's cold outside, bring a sweater!"</span>                        
                        }
                    )
                    <span class="highlight-builtIn">print</span> (response.text)
                </code>
            </pre>
        </div>
        <div id="Java" class="tabcontent">
            <pre>
                <code>
                    import com.mashape.unirest.http.HttpResponse;
                    import com.mashape.unirest.http.Unirest;
                            
                    <span class="highlight-keyword">public class</span><span class="highlight-string">UnirestSendSMS</span>{
                    <span class="highlight-keyword">public static void</span> <span class="highlight-string">main</span>(String[] args){
                        <span class="highlight-keyword">try</span>{
                            System.out.println(<span class="highlight-string">"Sending SMS"</span>);
                                    
                            HttpResponse response = Unirest.post(<span class="highlight-string">"https://api.46elks.com/a1/sms"</span>)
                                .basicAuth(<span class="highlight-string">"API Username"</span>,<span class="highlight-string">"API Password"</span>)
                                .field(<span class="highlight-string">"to"</span>,<span class="highlight-string">"+46766861004"</span>)
                                .field(<span class="highlight-string">"from"</span>,<span class="highlight-string">"JavaElk"</span>)
                                .field(<span class="highlight-string">"message"</span>,<span class="highlight-string">"Bring a sweater, it’s cold outside!"</span>)
                                .asString();

                            System.out.println(response.getBody());
                            }
                            
                            <span class="highlight-keyword">catch</span>(Exception e){
                                    System.out.println(e);
                                }
                            }
                        }
                </code>
            </pre>
        </div>
        <div id="Ruby" class="tabcontent">
            <pre>
                <code>
                <span class="highlight-keyword">require</span> <span class="highlight-string">'net/http'</span>

                uri = URI(<span class="highlight-string">'https://api.46elks.com/a1/sms'</span>)
                req = Net::HTTP::Post.new(uri)
                req.basic_auth '<API Username>', '<API Password>'
                req.set_form_data(
                    :from => <span class="highlight-string">'RubyElk'</span>,
                    :to => <span class="highlight-string">'+46704508449'</span>,
                    :message => <span class="highlight-string">'Login code 123456'</span>
                )

                res = Net::HTTP.start(
                    uri.host,
                    uri.port,
                    :use_ssl => uri.scheme == 'https') <span class="highlight-keyword">do</span> |http|
                http.request req
                <span class="highlight-keyword">end</span>

                puts res.body
                </code>
            </pre>
        </div>
    </section>
</div>

<?php include('components/footer.inc.php')?>