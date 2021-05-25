<?php $page = 'resources';require('components/header.inc.php')?>

    <div class="main-content" onclick="hideMenu()">
        <section>
            <div class="text">
                <br>
                <h1>Resurser och länkar</h1>
                <p>Här samlar vi tips på länkar och resurser som du kan använda om du vill lära dig vidare om API:er.</p>
                
                <h2>Resurser för att hitta fler API:er</h2>
                <h3>Sveriges dataportal</h3>
                <p>Webbplatsen Sveriges dataportal samordnar och tillgängliggör datamängder från offentliga och privata organisationer. <a href="https://www.dataportal.se/">dataportal.se</a>.</p>
                <br>
                <br>

                <h3>API-katalogen</h3>
                <p>Apikatalogen är en webbplats som samlar svenska API:er, till exempel nyheter, kollektivtrafik, SMS, sport, musik och mycket mer. <a href="http://apikatalogen.se/">apikatalogen.se</a>.</p>
                <br>
                <br>

                <h3>GitHub</h3>
                <p>Github har en stor insamling av offentliga API:er från olika delar av världen. <a href="https://github.com/public-apis/public-apis">github.com/public-apis/public-apis</a>.</p>
                <br>
                <br>

                <h3>RapidApi</h3>
                <p>Webbplatsen rapidapi.com samlar också in många populära och offentliga API:er. <a href="https://rapidapi.com/category/Data">rapidapi.com/category/Data</a>.</p>
                <br>
                <br>

                <h2>Youtubetutorials på när ett API hämtas och används</h2>
                <br>

                <h3>Python (Svenska)</h3>
                <p class="subtitles">Ej textad</p>
                <p>Unga Programmerare har lagt upp en video på hur man anropar ett API i Python. I videon går han igenom lite kort vad ett API är och visar lite olika resurser för hur man hittar API:er. Sedan går Unga Programmerare igenom hur man gör ett anrop till API:et <a href="https://uselessfacts.jsph.pl/">Random Useless Facts</a>.</p>
                <br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vFlmiY6v3yg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <h3>46elks API i Python (Svenska)</h3>
                <p class="subtitles">Ej textad</p>
                <p>Unga Programmerare har lagt upp en video på sin youtube-kanal om hur man skickar ett sms med 46elks API i programmeringsspråket Python. Han visar även hur ett felmeddelande kan se ut om smset inte lyckas skickas.</p>
                <br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/y44g9CKss10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h3>JavaScript (Engelska)</h3>
                <p class="subtitles">Autogenererad textning översatt till olika språk</p>
                <p>iEatWebsites har lagt upp en video där han använder <a href="https://pokeapi.co/">PokéAPI</a> i JavaScript. Han visar hur man kan få ut informationen om en specifik pokemon och visa det på en webbsida.</p>
                <br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/tFVdxGgJPCo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <h3>JavaScript jQuery (Engelska)</h3>
                <p class="subtitles">Autogenererad textning översatt till olika språk</p>
                <p>freeCodeCamp.org har lagt upp en video på deras youtube-kanal där dom visar hur man kan anropa ett API med JavaScript-biblioteket jQuery. Dom använder <a href="https://openweathermap.org/api">OpenWeather API</a> och visar hur man kan plocka ut specifika data från det JSON-svar man får när man anropar API:et.</p>
                <br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BYsTrGH6B2s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            
            <div class="nav-buttons">
                <button type="button" onclick="location.href='test-your-knowledge.php';"><i class="fas fa-chevron-left previousChapter-icon"></i>Föregående</button>
            </div>
        </section>
    </div>
    
<?php include('components/footer.inc.php')?>