<style>
    .tools-list li {
        display: inline-block;
        overflow: hidden;
        width: 100%;
        margin-bottom: 10px;
    }

    .button-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        padding: 20px 0;
    }

    .button-grid li {
        list-style: none;
    }

    .button-grid button {
        width: 100%;
        padding: 10px;
        background: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: transform 0.2s;
    }

    .button-grid button:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .button-grid img {
        max-width: 70%;
        height: auto;
        margin-bottom: 8px;
    }
</style>

<div class="blurb">
    <h2>Developer Tools</h2>
    <?php //BreadCrumbs
    if (urldecode($_SERVER['REQUEST_URI'])==="/español/software/herramientasparadesarrolladores") {
                    include ('../../../include/_code/migasDePan_software.php');
    }
    else {
        include ('../../include/_code/breadCrumbs_software.php');
    }
                ?>
    <p tabindex="0" class="selection">The job of the developer here at LAtinosPC is to grow or cause the site to grow and
        become more mature, advanced, or elaborate, yet simple and intuitive to browse. Also our job is to elaborate (like a
        musical theme) by modification of the melody, harmony, or rhythm; a better website for our visitors. We not only
        write code, but we also read a lot of code. Well-written code is easy to understand and remember because it is clear
        and organized. we begin with an idea that can make something start to exist, start to experience, or start to
        possess.</p>
    
    <h2>Here are some of the popular tools LAPC uses:</h2>
    <ul class="tools-list sb_menu">
        <li tabindex="0" class="card2 selection"><a href="https://www.google.com/keep/">Google Keep</a> for note taking</li>
        <li tabindex="0" class="card2 selection"><a href="https://www.wps.com/">WPS</a> for accessing documents, Office Suite</li>
        <li tabindex="0" class="card2 selection"><a href="https://notepad-plus-plus.org/">Notepad ++</a> Source Code Editor</li>
        <li tabindex="0" class="card2 selection"><a href="https://www.gimp.org/">Gimp</a> For image editing, image manipulation</li>
        <li tabindex="0" class="card2 selection"><a href="https://www.wampserver.com/en/">WAMP</a> For website environment, and testing</li>
        <li tabindex="0" class="card2 selection">A <a href="https://en.wikipedia.org/wiki/Web_browser#Browsers">web browser</a> and several <a href="https://latinospc.com/web/websites.php#navi">websites</a>.</li>
    </ul>

    <ul class="button-grid">
        <li>
            <a href="https://www.softwareadvice.com/categories/">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/softwareadvice.svg" alt="SoftwareAdvice" title="SoftwareAdvice">
                    <br>Software Advice
                </button>
            </a>
        </li>
        <li>
            <a href="https://filehippo.com/popular/">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/filehippo.png" alt="FileHippo" title="FileHippo">
                    <br>FileHippo
                </button>
            </a>
        </li>
        <li>
            <a href="https://www.majorgeeks.com/mg/sortdate/internet_tools.html">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/majorgeeks.gif" alt="MajorGeeks" title="MajorGeeks">
                    <br>MajorGeeks
                </button>
            </a>
        </li>
        <li>
            <a href="https://ninite.com/">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/ninite.png" alt="Ninite" title="Ninite">
                    <br>Ninite
                </button>
            </a>
        </li>
        <li>
            <a href="https://www.filehorse.com/">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/filehorse.png" alt="FileHorse" title="FileHorse">
                    <br>FileHorse
                </button>
            </a>
        </li>
        <li>
            <a href="https://win.softpedia.com/index.free.shtml?scroll_flt">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/softpedia3x2HGBW9_400x400.png" alt="Softpedia" title="Softpedia">
                    <br>Softpedia
                </button>
            </a>
        </li>
        <li>
            <a href="https://en.softonic.com/">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/softonic.jpg" alt="Softonic" title="Softonic">
                    <br>Softonic
                </button>
            </a>
        </li>
        <li>
            <a href="https://www.snapfiles.com/topdownloads/">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/snapfileslogo-smaller.png" alt="Snapfiles" title="Snapfiles">
                    <br>Snapfiles
                </button>
            </a>
        </li>
        <li>
            <a href="https://www.filepuma.com/">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/filepuma.png" alt="FilePuma" title="FilePuma">
                    <br>Filepuma
                </button>
            </a>
        </li>
        <li>
            <a href="https://sourceforge.net/directory/windows/?developmentstatus=5-production-stable">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/sourgeforge-logo-full.svg" alt="SourceForge" title="SourceForge">
                    <br>Sourgeforge
                </button>
            </a>
        </li>
        <li>
            <a href="https://www.donationcoder.com/software">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/donationcoder.jpg" alt="Donation Coder" title="Donation Coder">
                    <br>Donation Coder
                </button>
            </a>
        </li>
        <li>
            <a href="https://www.fosshub.com/">
                <button tabindex="0" class="card2 selection">
                    <img src="https://latinospc.com/latinospc/articles/software/fosshub5b7e46590c200816f7b796df.png" alt="Foss Hub" title="Foss Hub">
                    <br>Foss Hub
                </button>
            </a>
        </li>
    </ul>
</div>
<div class="spacer">
    <hr>
</div>