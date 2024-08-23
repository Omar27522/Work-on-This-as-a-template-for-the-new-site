<article class="fullbar">
    <!--Full Bar -->
    <section class="hero3" id="software">
        <div class="container"><?= empty($title) ? $titulo : $title;?>
            <a href="#title"><img src="https://latinospc.com/images/programs/code.jpg" width="263" height="146"
                    alt="image" class="rtl" /></a>
            <?= empty($description) ? $descripcion[0] : $description[0];?>
        </div><span id="ps2"></span><br />
        <div class="container">

            <?php
            if (isset($_GET)) :
                switch (key($_GET)) :
            case 'antivirus':       $imag = 'av';       $title = 'Antivirus';       $id = 'Anti-Virus';     $link = 'antivirus';      break;
            case 'malwarecleaner':  $imag = 'mwc';      $title = 'Malware Cleaner'; $id = 'MalwareCleaner'; $link = '#MalwareCleaner';  break;
            case 'webbrowsers':     $imag = 'wb';       $title = 'Web Browsers';    $id = 'WebBrowsers';    $link = '#WebBrowsers';     break;
            case 'messaging':       $imag = 'msg';      $title = 'Messaging';       $id = 'Messaging';      $link = '#Messaging';       break;
            case 'media':           $imag = 'media';    $title = 'Media';           $id = 'Media';          $link = '#Media';           break;
            case 'runtimes':        $imag = 'rt';       $title = 'Runtimes';        $id = 'Runtimes';       $link = '#Runtimes';        break;
            case 'imaging':         $imag = 'img';      $title = 'Imaging';         $id = 'Imaging';        $link = '#Imaging';         break;
            case 'documents':       $imag = 'docs';     $title = 'Documents';       $id = 'Documents';      $link = '#Documents';       break;
            case 'filesharing':     $imag = 'filsha';   $title = 'File Sharing';    $id = 'FileSharing';    $link = '#FileSharing';     break;
            case 'onlinestorage':   $imag = 'ons';      $title = 'Online Storage';  $id = 'OnlineStorage';  $link = '#OnlineStorage';   break;
            case 'other':           $imag = 'ot';       $title = 'Other';           $id = 'Other';          $link = '#Other';           break;
            case 'utilities':       $imag = 'utl';      $title = 'Utilities';       $id = 'Utilities';      $link = '#Utilities';       break;
            case 'compression':     $imag = 'press';    $title = 'Compression';     $id = 'Compression';    $link = '#Compression';     break;
            case 'developertools':  $imag = 'dv';       $title = 'Developer Tools'; $id = 'DeveloperTools'; $link = '#DeveloperTools';  break;
                default: "code";    $imag='code';       $link='#title';  break;
                endswitch;
            endif;
            ?>
            <a href="<?php if(!empty($link)){echo$link;}else{echo"#title";} ?>">
                <img src="https://latinospc.com/images/programs/<?= $imag; ?>.jpg" width="263" height="670" alt="image"
                    class="fl" /></a>


            <h2>&larr; Click on the image.</h2>
            <aside class="colms2 buttons">
                <a href="?antivirus#ps2" id="refresh"><button type="button" class="bttn">Anti-Virus</button></a>
                <a href="?malwarecleaner#ps2" id="refresh"><button type="button" class="bttn">Malware Cleaner</button></a>
                <a href="?webbrowsers#ps2" id="refresh"><button type="button" class="bttn">Web Browsers</button></a>
                <a href="?messaging#ps2" id="refresh"><button type="button" class="bttn">Messaging</button></a>
                <a href="?media#ps2" id="refresh"><button type="button" class="bttn">Media</button></a>
                <a href="?runtimes#ps2" id="refresh"><button type="button" class="bttn">Runtimes</button></a>
                <a href="?imaging#ps2" id="refresh"><button type="button" class="bttn">Imaging</button></a>
                <a href="?documents#ps2" id="refresh"><button type="button" class="bttn">Documents</button></a>
                <a href="?filesharing#ps2" id="refresh"><button type="button" class="bttn">File Sharing</button></a>
                <a href="?onlinestorage#ps2" id="refresh"><button type="button" class="bttn">Online Storage</button></a>
                <a href="?other#ps2" id="refresh"><button type="button" class="bttn">Other</button></a>
                <a href="?utilities#ps2" id="refresh"><button type="button" class="bttn">Utilities</button></a>
                <a href="?compression#ps2" id="refresh"><button type="button" class="bttn">Compression</button></a>
                <a href="?developertools#ps2" id="refresh"><button type="button" class="bttn">Developer
                        Tools</button></a>
            </aside>
            <div class="clr">each</div>
            <h3><a href="<?php if (key($_GET)){ echo $link; } ?>" class="rm" title="Programs">Read more</a></h3>
        </div>
    </section>
</article>
<!--Full Bar -->

<article class="fullbar" id="programs"><br />
    <?php if (key($_GET)){ ?>
    <div id="<?= $id ?>" class="hero4 blurb">
        <h2><?=$title?></h2>
        <section tabindex="0" class="selection">
        <?php
        if (isset($_GET['antivirus'])) {
                include ('./antivirus/index.php');
        }/* Click ON antivirus and a window with a description will open.
        Click on the image and it will Take you to a directory inside software called antivirus.
        Read more will do the same.
        */
        ?>
        </section>
    </div> <?php } ?>
    <br />
    <a href="#software" id="title" class="sub_title">
        When it comes to choosing the right software for the job, there are many factors to consider.</a>
    <div class="spacer">
        <hr />
    </div><br />




    <div class="hero4 blurb">
        <h2>Here are a few steps you can take to help you make the right choice:</h2>
        <section tabindex="0" class="selection">

            <p><strong>Define your requirements:</strong> Clearly define the specific tasks and functionality you need
                the software to perform. This will help you to narrow down your options and make it easier to compare
                different software packages.</p>
            <p><strong>Research available options:</strong> Look into the different software options available that meet
                your requirements. Make a list of the software packages that seem like they would be a good fit.</p>
            <p><strong>Check for compatibility:</strong> Make sure that the software is compatible with your operating
                system and any other software you are currently using. Also check if the software is compatible with
                any hardware you are using as well.</p>
            <p><strong>Read reviews and user feedback:</strong> Read online reviews and user feedback to get an idea of
                how well the software works and how easy it is to use.</p>
            <p>
                <strong>Try before you buy:</strong> Many software vendors offer free trial versions of their software,
                so you can test the software out before you make a purchase.
            </p>
            <p><strong>Consider cost:</strong> Consider the cost of the software, including any additional costs for
                support, upgrades, or additional features. Compare the cost of different software packages and see
                which one offers the best value for your budget.</p>
            <p><strong>Support and updates:</strong> Consider the level of support and updates provided by the software
                vendor. Make sure that the software will continue to be updated and supported in the future.</p>
            <p><strong>Technical requirements:</strong> If you are looking for software that require specific technical
                requirements, make sure that the software you choose meet them, for example if you are developing a
                mobile app, make sure that the software you choose can export the app to the platform you need.</p>

            <h2>Ultimately, the key is to find software that meets your specific needs and fits
                within your budget, while also being easy to use and compatible with your current setup.</h2>
        </section>
    </div> <br />
    <ul tabindex="0" class="selection hero4">
        <a href="#navi">
            <h2>Open source:</h2>
        </a>
        <li class="no-list">This type of software is freely available for use, modification, and distribution. The
            source
            code is also available for users to view and modify.</li>
        <p><a href="#navi">
                <h2>Free:</h2>
            </a>This type of software is also freely available for use, but the source code may not be available
            for modification.</p>
        <p>
        <h2><a href="#navi">Shareware:</h2></a>This type of software is typically available for a free trial
        period, after which the user must purchase a license to continue using the software.</p>
        <p>
        <h2><a href="#navi">Trialware:</h2></a> Similar to shareware, this type of software is available for a
        free trial period, but typically includes more limitations or reduced functionality.</p>
        <p>
        <h2><a href="#navi">Paid:</h2></a> This type of software must be purchased in order to use it.</p>
        <p>
        <h2><a href="#navi">Subscription:</h2></a> This type of software requires a recurring payment (such as a
        monthly or annual fee) in order to continue using the software. Examples include software as a service
        (SaaS) applications.</p>
    </ul>
</article>
<br />

<style>
.selection li {
    list-style: none;
    font-size: 110%;
}

.bttn {
    /*This whole section is for the buttons, I wanted to add a background color to the buttons, but it doesn't let me*/
    font-size: 170%;
    margin: 5.4%;
    padding: 10.4%;
}

.bttn:hover {
    color: midnightblue;
}

button:hover,
button:focus,
button:active {
    border-radius: 25px;
    color: blue;
}
</style>