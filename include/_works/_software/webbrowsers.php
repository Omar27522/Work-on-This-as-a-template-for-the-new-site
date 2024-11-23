<article class="hero4 fullbar">
    <h2 id="title">Web Browsers</h2>
    <h2><span style="text-align:right;color:blue;">
            <!-- INDENT THE SECOND H2 -->
            Software to browse the web on a PC.
        </span></h2>

    <p tabindex="0" class="selection">Many websites are now services (like streaming services for example).
        A web browser is a portal for connecting to computers across the internet.
        Many services now days can be accessed via web browser making it much easier for companies to write programs for
        their products that use the web as an interface to their services and/or goods.
    </p>
    <img src="" alt="1st image" class="fl" style="background:red; height:400px;" height="200px">
    <p tabindex="0" class="selection">Microsoft Windows has Microsoft Edge, but there are many other <a
            href="https://www.softwaretestinghelp.com/best-browser-ranking/" title="best-browser-ranking">web
            browsers</a>
        that can be installed alongside one another; many companies (like schools, banks ,government sites, ETC.) use
        Edge
        to stay <a href="https://learn.microsoft.com/en-us/compliance/">compliant</a> with government regulations.</p>
    <hr />
    <h2>A Brief History of Web Browsers</h2>

    <p>The evolution of web browsers has been intertwined with the growth of the internet itself.</p>
    <h2 style="text-align:center;">Here's a simplified timeline:</h2>
    <section class="colms2">

        <div class="selection">
            <h2>Early Days (1970s-1980s)</h2>
            <style>
            li {
                font-size: 1.3rem;
            }
            </style>
            <ul>
                <li>ENQUIRE: One of the earliest web browsers, developed in 1973.</li>
                <li>WorldWideWeb (WWW): Created by Tim Berners-Lee in 1989.</li>
            </ul>
        </div>

        <div class="item selection">
            <h2>The Graphical Era (1990s)</h2>
            <ul>
                <li>Mosaic: Released in 1993, one of the first graphical web browsers.</li>
                <li>Netscape Navigator: Dominated the late 1990s.</li>
                <li>Internet Explorer: Microsoft's response to Netscape.</li>
            </ul>
        </div>


        <div class="selection">
            <h2>The Browser Wars (2000s)</h2>
            <ul>
                <li>Mozilla Firefox: Launched in 2004, gained popularity due to its open-source nature.</li>
                <li>Google Chrome: Released in 2008, known for its speed and performance.</li>
                <li>Safari: Apple's web browser.</li>
            </ul>
        </div>

        <div class="selection">
            <h2>Modern Browsers (2010s-Present)</h2>
            <p>The browser market remains competitive, with ongoing innovations in areas like speed, security, and
                features.</p>
        </div>
    </section> <!-- colms2 -->
    <hr style="width:65%;">
    <h2 class="center">Web Browser Use Cases</h2>
    <section class="colms newspaper2">
        <fieldset>
            <legend>Research and Learning</legend> Browsers are used to search for information on virtually any topic,
            from academic research to personal interest subjects. This includes reading articles, watching educational
            videos, and accessing online courses.
        </fieldset>
        <fieldset>
            <legend>Communication</legend> Web browsers are the gateway to various communication platforms like email,
            social media, and messaging services. They help you stay in touch with friends, family, and colleagues.
        </fieldset>
        <fieldset>
            <legend>Entertainment</legend> Streaming videos, listening to music, playing online games, and reading
            digital books or comics are all activities facilitated by web browsers.
        </fieldset>
        <fieldset>
            <legend>Shopping</legend> Online shopping has become a staple of modern life. Browsers allow you to browse
            products, compare prices, read reviews, and make purchases from the comfort of your home.
        </fieldset>
        <fieldset>
            <legend>Banking and Finance</legend> Browsers are used to access online banking services, manage
            investments, pay bills, and perform other financial transactions.
        </fieldset>
        <fieldset>
            <legend>Work and Productivity</legend> Many web-based applications support productivity, including project
            management tools, collaboration platforms, and document storage and editing services.
        </fieldset>
        <fieldset>
            <legend>News and Updates</legend> Staying updated with current events is easy with browsers. Users can
            access news websites, subscribe to news feeds, and watch live broadcasts.
        </fieldset>
        <fieldset>
            <legend>Travel Planning</legend> Browsers facilitate booking flights, hotels, and rental cars, as well as
            researching travel destinations and reading travel blogs or reviews.
        </fieldset>
        <fieldset>
            <legend>Health and Fitness</legend> Web browsers help you find information about health conditions, book
            medical appointments, track fitness goals, and follow workout routines or diets.
        </fieldset>
        <fieldset>
            <legend>Government and Civic Services</legend> Accessing government services, such as renewing licenses,
            filing taxes, or applying for permits, is often done through web browsers.
        </fieldset>
        <fieldset>
            <legend>Job Hunting and Professional Networking</legend> Browsers are essential for searching job listings,
            submitting applications, and connecting with professionals via platformsplatforms like LinkedIn.
        </fieldset>
    </section>
    <hr style="width:65%;">
    <style>
    details {
        font-size: 18px;
        border: solid 2px black;
        width: 75%;
        display: inline-block;
        padding-top: 1%;
        padding-bottom: 1%;
    }

    summary {
        display: inline;
        padding: 1%;
        background: linear-gradient(to right, #868f96 0%, #596164 100%);
        border-radius: 0 20px 0 25px;
        cursor: pointer;
        color:#FAFAFA;
        padding-left:5%;
    }
    summary:hover, summary:focus{
        color:black;
    }
    .pe{
        margin-top:7px;
        padding-right:13px;
    }
    #image-container { width: 100%; height: 100%; position: relative; }
    #image-container img { width: 100%; height: 71rem; position: absolute;}
    </style>
    <section class="" style="align-contents:center;">
        <h2 style="padding-left:27%;">Professional Environment</h2>
        <div class="colms2">

        <?php /*
        echo"<details><summary class=\"selection_2\">";
        echo $profesionalEnvironment['summary'][0];
        echo"</summary><div class=\"pe\"><span tabindex=\"0\" class=\"selection_2\">";
        echo $profesionalEnvironment['detail'][0];
        echo"</span></div></details>";
        */
        ?>

<img src="../../tempimages/images/100 Amazing Mixed Wallpapers {Pack -341} (9).jpg" alt="1st image" class="rtl" style="background:white;"  width="20%">
        <?php
        foreach ($profesionalEnvironment['summary'] as $index => $summary) {
            echo "<details>";
            echo "<summary class=\"selection_2\">";
            echo htmlspecialchars($summary);
            echo "</summary>";
            echo "<div class=\"pe\">";
            echo "<span tabindex=\"0\" class=\"selection_2\">";
            echo htmlspecialchars($profesionalEnvironment['detail'][$index]);
            echo "</span>";
            echo "</div>";
            echo "</details>"; }
        ?>
        </div><!-- Colms2^^ -->
    </section>
    <hr style="width:65%;">
    <h2>A professional Intraction with Web Browsers</h2>
    <section>
        <p>Once upon a time in a bustling city, there was a diligent professional named Jordan. Jordan's day started
            early, as the sun began to rise over the skyline.</p>
            <img src="../../tempimages/images/100 Amazing Mixed Wallpapers {Pack -341} (9).jpg" alt="1st image" class="rtl" style="background:white;"  width="20%">
        <p><strong>6:30 AM:</strong> The alarm on Jordan's phone chimed, and after a quick stretch, Jordan grabbed
            the phone and opened the web browser to check the morning news. Scanning through headlines, Jordan
            caught up on world events and local news, feeling ready to face the day.</p>
        <p><strong>7:00 AM:</strong> Over breakfast, Jordan used the browser to watch a couple of tutorial videos on
            a new software tool needed for a project at work. The videos were informative and set a positive tone
            for the day.</p>
            <img src="../../tempimages/images/100 Amazing Mixed Wallpapers {Pack -341} (20).jpg" alt="1st image" class="fl" style="background:white;"  width="20%">
        <p><strong>8:30 AM:</strong> Arriving at the office, Jordan opened the browser again, this time to access
            the company's project management software. Tasks were assigned, deadlines checked, and a quick chat with
            colleagues on the integrated communication platform helped clarify the day's priorities.</p>
        <p><strong>11:00 AM:</strong> During a break, Jordan used the browser to check personal emails and social
            media accounts. Responding to a few messages and scrolling through the latest updates from friends and
            family added a light-hearted touch to the busy morning.</p>
        <p><strong>1:00 PM:</strong> After lunch, it was time for some online shopping. Jordan needed to buy a few
            things for an upcoming event, so the browser was used to compare prices, read reviews, and make a
            purchase.</p>
        <p><strong>3:00 PM:</strong> As the afternoon wore on, Jordan accessed the browser again to join a virtual
            meeting. The browser facilitated the video call, and Jordan shared a presentation using the browser's
            screen-sharing feature.</p>
            <img src="../../tempimages/images/100 Amazing Mixed Wallpapers {Pack -341} (40).jpg" alt="1st image" class="rtl" style="background:white;"  width="20%">
        <p><strong>5:30 PM:</strong> Wrapping up the workday, Jordan used the browser to manage finances. Online
            banking allowed Jordan to pay bills, check account balances, and ensure everything was in order.</p>
        <p><strong>7:00 PM:</strong> At home, Jordan used the browser to plan a weekend trip. Researching travel
            destinations, booking a hotel, and checking flight options were all seamlessly done online.</p>
        <p><strong>9:00 PM:</strong> The day winding down, Jordan settled on the couch with a laptop. Browsers made
            it easy to stream a favorite TV show on a popular streaming platform, providing a relaxing end to a
            productive day.</p>
        <p><strong>11:00 PM:</strong> Before bed, Jordan used the browser one last time to review an online course.
            Learning something new felt like a great way to wrap up the day.</p>
            <img src="../../tempimages/images/100 Amazing Mixed Wallpapers {Pack -341} (25).jpg" alt="1st image" class="fl" style="background:white;"  width="20%">
        <p>And so, the day in the life of Jordan, filled with browsing for work, pleasure, and everything in
            between, came to an end. The browser had been a constant companion, making each task a bit easier and
            more connected to the wider world.</p>
        <p>Jordan drifted off to sleep, ready to navigate another day with the trusty web browser at hand. 📱💻</p>
    </section>
</article>
<div class="spacer">
    <hr />
</div>